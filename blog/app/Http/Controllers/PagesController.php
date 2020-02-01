<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Log;

class PagesController extends Controller
{
    public function index()
    {
    	$message = "Someone Access";
    	Log::emergency($message);
    	Log::alert($message);
    	Log::critical($message);
    	Log::error($message);
    	Log::warning($message);
    	Log::notice($message);
    	Log::info($message);
    	Log::debug($message);

    	return "Hellow World";
    }

    public function maintenance()
    {
    	return "Down for Maintenance";
    }
}
