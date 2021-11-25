<?php

namespace App\Traits;

use App\Models\LiveStreaming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon;
use Ramsey\Uuid\Type\Integer;

trait CreateZoom
{



    public function CreateZoomFun( $teacher_id = '')
    {

        $MEETING_TYPE_INSTANT = 1;
        $MEETING_TYPE_SCHEDULE = 2;
        $MEETING_TYPE_RECURRING = 3;
        $MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

        $current_time = Carbon\Carbon::now()->toDateTimeString();

//        return $current_time;

        $path = 'users/me/meetings';

        $response = $this->zoomPost($path, [
            'topic' => 'topic',
            'type' => $MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat( $current_time ),
            'duration' => '45',
            'agenda' => 'agenda',
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);

        $request_data = json_decode($response->body(), true);

//        return $request_data['id'];

        $data['teacher_id'] = $teacher_id;

        $data['uuid']       = $request_data['uuid'];
        $data['zoom_id']    = (string) $request_data['id'];
//        $data['test_id']    = (string) $request_data['id'];
        $data['host_email'] = $request_data['host_email'];
        $data['host_id']    = $request_data['host_id'];
        $data['topic']      = $request_data['topic'];
        $data['agenda']     = $request_data['agenda'];
        $data['start_url']  = $request_data['start_url'];
        $data['join_url']   = $request_data['join_url'];
        $data['duration']   = $request_data['duration'];
        $data['start_time'] = $request_data['start_time'];
        $data['end_time']   = '';
        $data['type']       = $request_data['type'];
        $data['password']            = $request_data['password'];
        $data['h323_password']       = $request_data['h323_password'];
        $data['pstn_password']       = $request_data['pstn_password'];
        $data['encrypted_password']  = $request_data['encrypted_password'];



        $live_stream_data = LiveStreaming::create( $data );

//           $re = LiveStreaming::where('id',$live_stream_data->id)->first();
//        return ["data"=>$data,"cr"=>$live_stream_data ,"re"=>$re ];
       return $live_stream_data;

    }



}
