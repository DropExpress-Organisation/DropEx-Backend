<?php

namespace App\Http\Controllers\sms;


use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class TwilioController extends Controller
{


    public function sendMessage(Request $request)
    {

         // Your Account SID and Auth Token from twilio.com/console
         $sid = env('TWILIO_SID');
        //  $token = env('TWILIO_AUTH_TOKEN');
         $token = $request->bearerToken();
         $client = new Client($sid, $token);

        //  $request->fullUrlWithQuery([
        //      'type' => 'to',
        //      'type' => 'body'
        // ]);



        //  $message = $client->messages
        //           ->create($request->phone, // to
        //                    [
        //                        "body" => $request->message,
        //                        "from" => env('TWILIO_MOBILE_NUMBER'),
        //                        "statusCallback" => env('STATUS_CALLBACK')
        //                    ]
        //           );

        // print($message->sid);

        //  Log::info('Send SMS endpoint hit');
        //  Log::info($request->all());

        //  return $request;

        try{
            $message = $client->messages
                  ->create($request->phone, // to
                           [
                               "body" => $request->message,
                               "from" => env('TWILIO_MOBILE_NUMBER'),
                            //    "statusCallback" => env('STATUS_CALLBACK')

                           ]
                  );

        print($message->sid);

         Log::info('Send SMS endpoint hit');
         Log::info($request->all());

         return $request;

        }catch(Exception $e)
        {
             $e->getMessage();
             print($e);
        }
    }
}
