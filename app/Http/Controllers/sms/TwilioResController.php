<?php

namespace App\Http\Controllers\sms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TwilioResController extends Controller
{
    public function twilioResponse(Request $request){
        Log::info('Twilio endpoint hit');
        Log::info($request->all());

        return [
            'ResultCode' => 0,
            'status' => 'sent',
            'ResultDesc' => 'SMS has been sent successfully'
            // 'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }
}
