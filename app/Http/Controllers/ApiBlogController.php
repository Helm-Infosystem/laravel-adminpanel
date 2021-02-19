<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiBlog;

class ApiBlogController extends Controller
{
    public function datadisplayapi()
    {
       $api = ApiBlog::all();
       return response()->json($api);
    }
    public function showdataapi($id)
    {
        $api = ApiBlog::find($id);
        return response()->json($api);
        
    }
}
