<?php


namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use App\Models\LiveStreaming;
use App\Traits\ZoomJWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Carbon;

class MeetingController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;




    public function list(Request $request)
    {
        $path = 'users/me/meetings';
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        $data['meetings'] = array_map(function (&$m) {
            $m['start_at'] = $this->toUnixTimeStamp($m['start_time'], $m['timezone']);
            return $m;
        }, $data['meetings']);

        return [
            'success' => $response->ok(),
            'data' => $data,
        ];
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'topic'      => 'required|string',
            'agenda'     => 'string|nullable',
            'duration'   => 'required|numeric',
            'start_time' => 'required|date',
            'end_time'   => 'required|date',

            'teacher_id'    => 'required|exists:users,id',
            'stage_id'      => 'required|exists:stages,id',
            'class_id'      => 'required|exists:classes,id',
            'department_id' => 'nullable|exists:departments,id',
            'subject_id'    => 'required|exists:subjects,id'

            ]);

        if ($validator->fails()) {
            return [
                'success' => false,
                'data' => $validator->errors(),
            ];
        }


        $data = $validator->validated();

        $path = 'users/me/meetings';

        $response = $this->zoomPost($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat($data['start_time']),
            'duration' => $data['duration'],
            'agenda' => $data['agenda'],
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);

        $request_data = json_decode($response->body(), true);

        $data['teacher_id'] = request()->get('teacher_id');

//        return $request_data['id'];
        $data['uuid']       = $request_data['uuid'];
        $data['zoom_id']    = $request_data['id'];
        $data['host_email'] = $request_data['host_email'];
        $data['host_id']    = $request_data['host_id'];
        $data['topic']      = $request_data['topic'];
        $data['agenda']     = $request_data['agenda'];
        $data['start_url']  = $request_data['start_url'];
        $data['join_url']   = $request_data['join_url'];
        $data['duration']   = $request_data['duration'];
        $data['start_time'] = $request_data['start_time'];
        $data['end_time']   = request()->get('end_time');
        $data['type']       = $request_data['type'];
        $data['password']            = $request_data['password'];
        $data['h323_password']       = $request_data['h323_password'];
        $data['pstn_password']       = $request_data['pstn_password'];
        $data['encrypted_password']  = $request_data['encrypted_password'];

//        return $request_data;
        LiveStreaming::create( $data );

        if ($request->device_type == 'android')
        {
            return [
                'success' => $response->status() === 201,
                'data' => json_decode($response->body(), true),
            ];
        }

        toastr()->success('تم اضافة البيانات بنجاح', 'تهانيا' );
        return redirect( url('live-streaming') );
    }

    public function get(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        if ($response->ok()) {
            $data['start_at'] = $this->toUnixTimeStamp($data['start_time'], $data['timezone']);
        }

        return [
            'success' => $response->ok(),
            'data' => $data,
        ];
    }

    public function update(Request $request, string $id)
    {

//        return $request->all();

        $validator = Validator::make($request->all(), [
            'topic'      => 'required|string',
            'agenda'     => 'string|nullable',
            'duration'   => 'required|numeric',
            'start_time' => 'required|date',
            'end_time'   => 'required|date',

            'teacher_id'    => 'required|exists:users,id',
            'stage_id'      => 'required|exists:stages,id',
            'class_id'      => 'required|exists:classes,id',
            'department_id' => 'nullable|exists:departments,id',
            'subject_id'    => 'required|exists:subjects,id',
            'device_type'   => 'required|in:web,ios,android'

        ]);

        if ($validator->fails()) {

            if ($request->device_type == 'android')
            {
                return response()->json(['error' => collect( $validator->errors() )->flatten(1) , 'code' => 422], 422);
            }

            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();

        }



        $data = collect( $validator->validated() )->except('device_type')->toArray();

        $path = 'meetings/' . $id;
        $response = $this->zoomPatch($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => (new \DateTime($data['start_time']))->format('Y-m-d\TH:i:s'),
            'duration' => $data['duration'],
            'agenda' => $data['agenda'],
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);


        $request_data = json_decode($response->body(), true);

        $data['teacher_id'] = request()->get('teacher_id');

//        return $request_data['id'];
        $data['uuid']       = $request_data['uuid'];
        $data['zoom_id']    = $request_data['id'];
        $data['host_email'] = $request_data['host_email'];
        $data['host_id']    = $request_data['host_id'];
        $data['topic']      = $request_data['topic'];
        $data['agenda']     = $request_data['agenda'];
        $data['start_url']  = $request_data['start_url'];
        $data['join_url']   = $request_data['join_url'];
        $data['duration']   = $request_data['duration'];
        $data['start_time'] = $request_data['start_time'];
        $data['end_time']   = request()->get('end_time');
        $data['type']       = $request_data['type'];
        $data['password']            = $request_data['password'];
        $data['h323_password']       = $request_data['h323_password'];
        $data['pstn_password']       = $request_data['pstn_password'];
        $data['encrypted_password']  = $request_data['encrypted_password'];

//        return $request_data;
        LiveStreaming::where([ ['zoom_id','=',$id] ])->update( $data );

        if ($request->device_type == 'android')
        {
//            return [
//                'success' => $response->status() === 201,
//                'data' => json_decode($response->body(), true),
//            ];

            return response()->json( ['data' => json_decode($response->body(), true) ], 200);
        }

        toastr()->success('تم تعديل البيانات بنجاح', 'تهانيا' );
        return redirect( url('live-streaming') );


    }

    public function update_zoom()
    {

//        return $request->all();

        $validator = Validator::make(request()->all(), [
//            'zoom_id'    => 'required|exists:live_streamings,zoom_id',
            'teacher_group_id'    => 'required|exists:teacher_groups,id',
            'topic'      => 'required|string',
            'agenda'     => 'string|nullable',
            'duration'   => 'required|numeric',
            'teacher_live_price'   => 'required|numeric',
            'start_time' => 'nullable|date',
            'end_time'   => 'nullable|date',
            'teacher_id'    => 'required|exists:users,id',
            'teacher_id'    => 'required|exists:live_streamings,teacher_id',
            'stage_id'      => 'required|exists:stages,id',
            'class_id'      => 'required|exists:classes,id',
            'department_id' => 'nullable|exists:departments,id',
            'subject_id'    => 'required|exists:subjects,id',
            'device_type'   => 'required|in:web,ios,android'

        ]);

        if ($validator->fails()) {

            if (request()->device_type == 'android')
            {
                return response()->json(['error' => collect( $validator->errors() )->flatten(1) , 'code' => 422], 422);
            }

            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();

        }



        $data = collect( $validator->validated() )->except('device_type')->toArray();

//        return $data;

        $zoom_id = LiveStreaming::where([ ['teacher_id','=', request()->teacher_id] ])->first()->zoom_id;

        $current_time = Carbon\Carbon::now()->toDateTimeString();

        $path = 'meetings/' . $zoom_id;
        $response = $this->zoomPatch($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => (new \DateTime( $current_time ))->format('Y-m-d\TH:i:s'),
            'duration' => $data['duration'],
            'agenda' => $data['agenda'],
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);


        $path = 'meetings/' . $zoom_id;
        $response = $this->zoomGet($path);


        $request_data = json_decode($response->body(), true);


        $data['teacher_id'] = request()->get('teacher_id');
        $data['uuid']       = $request_data['uuid'];
//        $data['zoom_id']    = $request_data['id'];
        $data['host_email'] = $request_data['host_email'];
        $data['host_id']    = $request_data['host_id'];
        $data['topic']      = $request_data['topic'];
        $data['agenda']     = $request_data['agenda'];
        $data['start_url']  = $request_data['start_url'];
        $data['join_url']   = $request_data['join_url'];
        $data['duration']   = $request_data['duration'];
        $data['start_time'] = $request_data['start_time'];
        $data['end_time']   = request()->get('end_time');
        $data['type']       = $request_data['type'];
        $data['password']            = $request_data['password'];
        $data['h323_password']       = $request_data['h323_password'];
        $data['pstn_password']       = $request_data['pstn_password'];
        $data['live_status']         = 'on';
        $data['encrypted_password']  = $request_data['encrypted_password'];

//        return $request_data;
        LiveStreaming::where([ ['zoom_id','=', $zoom_id ] ])->update( $data );
        $data = LiveStreaming::where([ ['teacher_id','=', request()->get('teacher_id')] ])->first();

        if (request()->device_type == 'android')
        {
            $data = LiveStreaming::where([ ['teacher_id','=', request()->get('teacher_id')] ])->with(['teacher_fk', 'stage_fk', 'class_fk', 'department_fk', 'subject_fk'])->first();
//            return [
//                'success' => $response->status() === 201,
//                'data' => json_decode($response->body(), true),
//            ];

            return response()->json( ['data' => $data ], 200);
        }

        toastr()->success('تم تعديل البيانات بنجاح', 'تهانيا' );


        $live_ = LiveStreaming::where( [ ['teacher_id','=', Request()->teacher_id] ] )->first();
        return redirect( $live_->start_url );


    }

    public function delete(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomDelete($path);

        return [
            'success' => $response->status() === 204,
            'data' => json_decode($response->body(), true),
        ];
    }



}
