<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Soda\Cms\Database\Models\Content;
use Carbon\Carbon;
use DateTimeZone;

class AlarmController extends BaseController
{
    const ALARMS_ID = 6;

    public function alarm(Request $request){
      // get current day
      $now = Carbon::now(new DateTimeZone('Australia/Adelaide'));

      // get alarms
      $alarms = Content::find(self::ALARMS_ID)->block('alarm')->get();

      // get alarm for current day
      $alarm = $alarms->filter(function($alarm) use ($now){
        $days = json_decode($alarm->day);
        return in_array($now->dayOfWeek, $days);
      })->shuffle()->first();

      // no day set, use random
      if( is_null($alarm) ){
        $alarm = $alarms->shuffle()->first();
      }

      // redirect to streaming url
	    return redirect()->to($alarm->mp3);
    }
}
