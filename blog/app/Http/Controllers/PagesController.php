<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Log;
Use Illuminate\Support\Facades\Crypt;

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

    public function encryptval()
    {
        //return encrypt("thisissomevalue");

        // return Crypt::encryptString("thisissomevalue");


        $val = [
            'team1' => [
                'name'=>'juliet', 
                'age' => 22, 
                'dept' => 'it'
            ],
            'team2' => [
                'name'=>'jianne', 
                'age' => 23, 
                'dept' => 'it'
        ]];
       return encrypt($val);
        // return Crypt::encryptArray($val);

    }

    public function decryptval()
    {
        //thisissomevalue
       // return decrypt("eyJpdiI6Im5mWFZ6K0YrdnA2RVNyb0lwcTFsaWc9PSIsInZhbHVlIjoiV0FVOHZtNjhaMXdaTmV6UlVBSWxBOXh6ZVZjNjZKNm9yRmVWNWxOb3JcL3c9IiwibWFjIjoiZWQ5MjhkODQ0ZmYxMDQ1Y2I1ZmU0MjZkOTg4ZWY3MDc5YTNlM2IyMDQzMzY3ZTE3ZDIxZmZiYTVjMThkNmJkYiJ9");

        //array
       return decrypt("eyJpdiI6IjBXS1d3bjA1Q0tsbWFkSlU0dW05N3c9PSIsInZhbHVlIjoib2o1QmdHQjF3QUxUY0Nod3VncFVYYkVtNEw5azNMYllMSFFSVTN3TVE0ZDJOeTR5OXN1ejRxMmRJanQyYWpkeUJpNmYyTzZjRUhBM2FXeXVkU0luekdcL05mQis4OUpCVUF0SzhXUkNFeVpqSWpJMHJlS0pUbG5HSWxPYjQ0K3lKa0F4c3pvREJCYlNPQjd1YXJVbU80WXdqdzRyUHV5Mlhwa3hIc1RSOHBrK0tjSnJTN1ExMlA2dUloWTZ1WUlvWDg1XC9Ja2UzaVwvUngzXC9BczZVcWdNZmFFeEV3a1ljSGtcLzBCK0c3R0VXMDdBPSIsIm1hYyI6IjljNGE5MDc3YWJhZDlkYmU0Y2I1ZTcxMDY5OTk5OWVkZmQ3N2JmZWU5N2U2NzA5NGNjY2JjMDBhZDBhN2RkNzkifQ==");
    }
}
