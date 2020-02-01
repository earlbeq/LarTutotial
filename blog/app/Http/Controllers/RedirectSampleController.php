<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectSampleController extends Controller
{
    public function index()
    {
    	return "This is the index function of redirect sample controller";
    }

    public function showMessage($message)
    {
    	return $message;
    }

    public function showSomething()
    {
    	return 'Show Something';
    }
}
