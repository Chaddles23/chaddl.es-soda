<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Soda\Cms\Database\Models\Content;

class HolidayController extends BaseController
{
    
    public function isHolidayMode(Request $request){
		$holidayMode = Content::findOrFail(ContentController::HOLIDAY_MODE);

		return response()->json(['enabled'=> (bool) $holidayMode->properties->enabled]);
    }
}
