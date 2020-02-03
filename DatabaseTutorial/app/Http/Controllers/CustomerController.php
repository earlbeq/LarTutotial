<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
    	//$customers = DB::table('customers')->get();
    	
    	//Laravel Eloquent way
    	// $customers = Customer::all(); //to get specific colume use all("columnname1, columname2")
    	
    	// $customers = Customer::where("name", "Mr. Porter Hessel II")->first();

    	// to get single value
    	// $customers = Customer::where("name", "Mr. Porter Hessel II")->value("email");

    	// $customers = array();

    	// $count = Customer::count();

    	// return $count;

    	// return $customers;
    	// return view("customers")->with("customers", $customers);

    	// return "".Customer::where("name", "Mr. Porter Hessel IIss")->exists();


    	// $query = DB::table("customers")->select("name", "email", "phone as mobile");

    	// $customers = $query->addSelect("address")->get();

    	$customers = DB::table("customers")
    	->select(DB::raw("rating + 10 as ratingnew, name, phone, email, address"))->limit(10)->get();

    	return $customers;
    }
}
