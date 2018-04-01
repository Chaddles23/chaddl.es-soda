<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Soda\Cms\Database\Models\Content;

class HassIOController extends BaseController
{
    
    public function isEnabled(Request $request){
		$hassIO = Content::findOrFail(ContentController::HASS_IO);

		return response()->json(['enabled'=> (bool) $hassIO->properties->enabled]);
    }
}
