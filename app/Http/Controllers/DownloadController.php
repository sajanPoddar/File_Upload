<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadController extends Controller
{
    //
    public function download($file)
    {
    	$file_path = public_path('uploads/'.$file);
    	// dd($file_path);
    	return Response()->download($file_path);
    }
}
