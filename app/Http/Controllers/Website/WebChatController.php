<?php

namespace App\Http\Controllers\Website;

use App\Models\App_firebase_tokens;
use App\Models\Room;
use App\Models\Room_Info;
use App\Models\RoomMsg;
use App\Models\StudentBook;
use App\Models\TeacherGroup;
use App\User;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminResetPassword;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Mail;
use Auth;

class WebChatController extends Controller {

    public $successStatus = 200;

// -------------------------------  paginate case -------------------------------
    public function paginate_case($name = '', $obj_ = '') {

        $pagination_status = request()->get('pagination_status');
        $per_link_         = request()->get('per_link_');


        $data = $obj_->get();


        if ($pagination_status == 'on') {
            if ($per_link_ != '' && is_numeric($per_link_) && $per_link_ > 0) {
                $data = $obj_->paginate($per_link_);
            } else {
                $data = $obj_->paginate(10);
            }
        }
        return  $data;

    }
// -------------------------------  paginate case -------------------------------

// =====================================================
    public function create_chat($id) {

        $user      = auth()->user();
        $group = TeacherGroup::findorfail( $id );

        return view('website.pages.teachers.profile.create-new-chat', compact('group','user'));

    }
// =====================================================

// =====================================================
    public function create_new_room_group(Request $request) {

        $validator = Validator::make($request->all(),[
            'title'          => 'required',
//            'desc'           => 'nullable',
//            'room_status'    => 'required|in:group,normal',
            'room_type'      => 'required|in:Teacher_To_Student,Student_To_Teacher,Parent_To_Teacher,Teacher_To_Parent',
            'from_user_id'   => 'required|numeric|exists:users,id',
            'group_id'       => 'required|numeric|exists:teacher_groups,id',

        ],[]);

        if ($validator->fails()) {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }


        $data =  $validator->validated();

        $student_books = StudentBook::where([ ['teacher_group_id','=',$data['group_id']] ])->pluck('student_id')->toArray();

        $to_users_count = count( $student_books );

        if( $to_users_count < 1 ){
            toastr()->warning( 'لا يوجد اعضاء' , trans('admin.Message_title_attention'));
            return back()->withInput();
        }





        $room_info = Room_Info::create([
            'title'       => $data['title'],
//            'desc'        => $data['desc'],
            'room_status' => 'group',
            'room_type'   => $data['room_type'],
        ]);



        for ($i = 0; $i < $to_users_count ; $i++) {
            Room::create([
                'room_info_id' => $room_info->id,
                'from_user_id' => $data['from_user_id'],
                'to_user_id'   => $student_books[$i],
                'room_status'  => 'group',
            ]);
        }

        toastr()->success('تم انشاء الغرفة بنجاح', 'تهانيا' );
        return back();


    }
// =====================================================

// =====================================================
    public function create_new_room(Request $request) {

//        return $request->all();

        $validator = Validator::make($request->all(),[
            'title'          => 'required',
            'desc'           => 'required',
//            'room_status'    => 'required|in:group,normal',
            'room_type'      => 'required|in:Teacher_To_Student,Student_To_Teacher,Parent_To_Teacher,Teacher_To_Parent',
            'from_user_id'   => 'required|numeric|exists:users,id',
            'to_user_id'     => 'required|array',
            'to_user_id.*'   => 'required|numeric|exists:users,id',

        ],[
            'to_user_id.required' => 'يجب اختيار على الاقل طالب واحد او اكثر'
        ]);

        if ($validator->fails()) {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }


        $data =  $validator->validated();

        $room_info = Room_Info::create([
            'title'       => $data['title'],
            'desc'        => $data['desc'],
            'room_status' => 'normal',
            'room_type'   => $data['room_type'],
        ]);


        $to_users_count = count( $data['to_user_id'] );

        for ($i = 0; $i < $to_users_count ; $i++) {
            Room::create([
                'room_info_id' => $room_info->id,
                'from_user_id' => $data['from_user_id'],
                'to_user_id'   => $data['to_user_id'][$i],
                'room_status'  => 'normal',
            ]);
        }

        $room_data = Room_Info::where([ ['id','=', $room_info->id] ])->with(['rooms_fk.to_user_fk'])->get();




        toastr()->success('تم انشاء الدردشة بنجاح', 'تهانيا' );
        return back();

    }
// =====================================================

// =====================================================
    public function chats() {

        $user = auth()->user();

        $search[0] = [ 'from_user_id','=', $user->id ];

        if ( $user->user_type == 'student')
        {
            $search[0] = [ 'to_user_id','=', $user->id ];
        }


        $rooms = Room::where( $search )->with(['room_fk','to_user_fk'])->get();

        return view('website.pages.teachers.profile.chats', compact('user','rooms'));
    }
// =====================================================

// =====================================================
    public function get_rooms(Request $request) {

        $validator = Validator::make($request->all(),[
            'user_id'     => 'required|numeric|exists:users,id',
            'user_type'   => 'required|in:teacher,student,parent',
            'room_status' => 'required|in:all,group,normal',
        ],[]);


        if($validator->fails()){
            $code = 422;
            return response()->json(['error' => collect( $validator->errors() )->flatten(1) ], $code );
        }

        $search[0] = [ 'from_user_id','=', $request->user_id ];

        if ( $request->user_type == 'student')
        {
            $search[0] = [ 'to_user_id','=', $request->user_id ];
        }

        if ($request->room_status != 'all')
        {
            $search[1] = [ 'room_status','=', $request->room_status ];
        }


        $rooms = Room::where( $search )->with(['room_fk','to_user_fk']);

        $data['room_info'] = 'data';

        $data  = $this->paginate_case('rooms', $rooms);


        return response()->json( $data, 200);


    }
// =====================================================

// =====================================================
    public function add_msg(Request $request) {

        $validator = Validator::make($request->all(),[
            'room_id'      => 'required|numeric|exists:rooms,id',
            'from_user_id' => 'required|numeric|exists:users,id',
            'to_user_id'   => 'required|numeric|exists:users,id',
            'type'         => 'required|in:message,image,voice,message_image,location',
            'message'      => 'nullable',
            'image'        => 'nullable|image',
            'voice'        => 'nullable',
            'date'         => 'required|numeric',
        ],[]);


        if($validator->fails()){
            $code = 422;
            return response()->json(['error' => collect( $validator->errors() )->flatten(1) ], $code );
        }

        $data_validate = $validator->validated();


        if ($request->image != '') {
            $data_validate['image']  = upload_image('medical_consulting_msgs',$request->image, 1, 'image');
        }


        if ($request->voice != '') {
            $data_validate['voice']  = upload_image('medical_consulting_msgs',$request->voice, 1, 'voice');
        }


        $Room = RoomMsg::create( $data_validate );

        $RoomMsg = RoomMsg::with(['from_user_fk','to_user_fk'] )->find( $Room->id );

        return response()->json([ 'data'=> $RoomMsg ], $this->successStatus);


    }
// =====================================================

// =====================================================
    public function get_message_by_room_id(Request $request) {

        $validator = Validator::make($request->all(),[
            'room_id'     => 'required|numeric|exists:rooms,id',
        ],[]);


        if($validator->fails()){
            $code = 422;
            return response()->json(['error' => collect( $validator->errors() )->flatten(1) ], $code );
        }

        $search[] = [ 'room_id','=', $request->room_id ];

        $user      = auth()->user();
        $rooms_msg = RoomMsg::where( $search )->with(['from_user_fk','to_user_fk'])->get();

        $chat_view = view('website.pages.general.chat-messages', compact('rooms_msg','user'))->render();

        return response()->json( ['chat_view' => $chat_view], 200);


    }
// =====================================================

// =====================================================
    public function get_room_info(Request $request) {

        $validator = Validator::make($request->all(),[
            'room_id'     => 'required|numeric|exists:rooms,id',
        ],[]);


        if($validator->fails()){
            $code = 422;
            return response()->json(['error' => collect( $validator->errors() )->flatten(1) ], $code );
        }


        $room = Room::find( $request->room_id );

        $rooms_info = Room_Info::find( $room->room_info_id );

        if ( $rooms_info )
        {
            return response()->json( ['data' => $rooms_info], 200);
        }

        return response()->json( ['data' => null], 200);


    }
// =====================================================


}
