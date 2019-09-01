<?php

namespace App\Http\Controllers;

use App\PushNotificationData;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function populate(Request $request){
        // $device_token = "fVs6PcfsYvU:APA91bFFD7yZf9r3Oa-kLu5mo7I0-8S9hwyCMZAn8p4j4gTGqqJ3bTtp09VgaOWcpQ1gibu-C3npF0SQRhzlwW200prFeF4PxujW8WhUgNafDfZ0o3CaSucA_OJxY_enrBjSWpVHXhjL";
        

        // PushNotificationData::get()->count();
        // if(PushNotificationData::where('device_token','token2')->exists()){
        //     return "got ";
        // }else{
        //     return "nothing got";
        // }

        // "notification": {
        //     "title": "FCM Message",
        //     "body": "This is a message from FCM"
        //   },

        $request->title = $request->title==''?'Test Title':$request->title;
        $request->title = $request->body==''?'Test Body':$request->body;

        $message = [
            "title"=>$request->title,
            "body">$request->body
        ];

        $pushNotiData = PushNotificationData::get();
        foreach ($pushNotiData as $data) {
            // echo $data->device_token."<br>";
            $this->sendGCM($message,$data->device_token);
        }

    }

    function sendGCM($message, $id) {


        $url = 'https://fcm.googleapis.com/fcm/send';


    
        $fields = array (
                'registration_ids' => array (
                        $id
                ),
                'data' => array (
                        "message" => $message
                )
        );
        $fields = json_encode ( $fields );
    
        $headers = array (
                'Authorization: key=' . "AAAAor4EhFI:APA91bFidbmf9tNDfavjMFD2M4cf4Y6RRfbC7IoqkTB0CGmsWj_ugj7Bw38gfwac7E2wTnf_EOpDXpN2kWT5IVnVvOr7I6ALS1E-AW8xbubgu-ySoN8xmPixkIoG5Uj2HQzE78WDNRYd",
                'Content-Type: application/json'
        );
    
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
    
        $result = curl_exec ( $ch );
        echo $result;
        curl_close ( $ch );
    }

    public function saveDeviceTokens(Request $request){

        if(PushNotificationData::where('device_token',$request->token)->exists()){

            return response()->json([
                'what'=>'done',
                'token'=>$request->token
            ]);
        }else{
            
            PushNotificationData::insert([
                'device_token'=>$request->token
            ]);

            return response()->json([
                'what'=>'not done',
                'token'=>$request->token
            ]);
        }

        // try {
        //     $id = PushNotificationData::where('device_token',$request->token)->get()[0]['id'];
        // } catch (\Exception $th) {

        // }
    }
}







/*
            curl -X POST -H "Authorization: Bearer AIzaSyBaWWTN10o_upA9hNFU74TJfMr009cCFJ4" -H "Content-Type: application/json" -d '{
            "message":{
            "notification": {
                "title": "FCM Message",
                "body": "This is an FCM Message",
            },
            "token": "fBqW0pzN-p4:APA91bHBdW32Yep39bMPCgPUMD7b-5bMgKdyOvSSZXwkkvjzLv1ErH1qtBDzJSgvonoFIEpaATBx4Lh5igPQArJasgey9B6reZqDjjmJlhYTUnFSfbDaChpYdmlR_i4ulHq9Pd_nHKBE"
            }
            }' https://fcm.googleapis.com/v1/projects/myproject-b5ae1/messages:send
        */

        /*
            curl -X POST -H "Authorization: key=AIzaSyBaWWTN10o_upA9hNFU74TJfMr009cCFJ4" -H "Content-Type: application/json" -d '{
            "to":"fBqW0pzN-p4:APA91bHBdW32Yep39bMPCgPUMD7b-5bMgKdyOvSSZXwkkvjzLv1ErH1qtBDzJSgvonoFIEpaATBx4Lh5igPQArJasgey9B6reZqDjjmJlhYTUnFSfbDaChpYdmlR_i4ulHq9Pd_nHKBE"
            "notification": {
                "title": "FCM Message",
                "body": "This is an FCM Message",
            },
            }' https://fcm.googleapis.com/fcm/send
        */

        /*
        curl -X POST -H "Authorization: Bearer AIzaSyBaWWTN10o_upA9hNFU74TJfMr009cCFJ4" -H "Content-Type: application/json" -d '{
        "message":{
        "notification": {
            "title": "FCM Message",
            "body": "This is an FCM Message",
        },
        "token": "fBqW0pzN-p4:APA91bHBdW32Yep39bMPCgPUMD7b-5bMgKdyOvSSZXwkkvjzLv1ErH1qtBDzJSgvonoFIEpaATBx4Lh5igPQArJasgey9B6reZqDjjmJlhYTUnFSfbDaChpYdmlR_i4ulHq9Pd_nHKBE"
            "notification"
        }
        }' https://fcm.googleapis.com/v1/projects/thescoree-caaa5/messages:send

        */