<?php


namespace App\Http\Controllers\sms;


use Exception;
use Twilio\Rest\Client;
use Twilio\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class SendSMSController extends Controller
{



    public function makeHttp($url, $body)
    {
        $url = 'https://api.twilio.com/' . $url;
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer ' . env('16b2a6c104b60cc2695e08ec533aaa89')),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }


    public function sendSMS(Request $request){
        // Your Account SID and Auth Token from twilio.com/console
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        // $curl_post_data = new Client($sid, $token);

        $twilio = new Client($sid, $token);

        $curl_post_data = $twilio->messages
                  ->create($request->to, // to
                           [
                           "body" => $request->body,
                           "from" => env('TWILIO_MOBILE_NUMBER'),
                           "statusCallback" => env('STATUS_CALLBACK').'/api/sms',
                           ]
                  );



          $url = '/2010-04-01/Accounts/AC866e1d44478f56fc29af057ee02b554b/Messages.json';

          Log::info('Send SMS endpoint hit');
          Log::info($request->all());

          print($curl_post_data);


          return $this->makeHttp($url, $curl_post_data);


    }
}
