<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Customer;
use DB;
use Response;

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

    	// $customers = DB::table("customers")
    	// ->select(DB::raw("rating + 10 as ratingnew, name, phone, email, address"))->limit(10)->get();

    	// return $customers;

    	// $customer = DB::table('customers')
    	// ->join("orders", "customers.id", "=", "orders.customer_id")
    	// ->select("customers.*", "orders.*")
    	// ->get();

    	// $customer = DB::table('customers')
    	// ->crossjoin("orders")
    	// ->get();

    	// return $customer;


    	//union
    	// $queryNine = DB::table("customers")
    	// ->where("rating", 9);


    	// $queryNineandZero = DB::table("customers")
    	// ->where("rating", 0)
    	// ->union($queryNine)
    	// ->get();

    	// return $queryNineandZero;

    	// Where
    	// $query = DB::table("customers")
    	// ->where("rating", "=", 9)
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereBetween("rating", [1, 5])
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereBetween("rating", [1, 5])
    	// ->orWhere("rating", "6")
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereNull("email")
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereNotNull("email")
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereIn("rating", [1, 2, 3])
    	// ->get();

    	// $query = DB::table("customers")
    	// ->whereNotIn("rating", [1, 2, 3])
    	// ->get();

    	// $query = DB::table('customers')
    	// ->whereColumn("name", "email")
    	// ->get();

    	// $query = DB::table('customers')
    	// ->whereColumn("updated_at", "=", "created_at")
    	// ->get();

    	//multple wherecolumn
    	// $query = DB::table('customers')
    	// ->whereColumn([
    	// 	["updated_at", "=", "created_at"],
    	// 	["name", "=", "email"]
    	// ])
    	// ->get();

    	//Multiple WHERE parameters

    	// $customer = DB::table('customers')
    	// ->where("name", "=", "Dr. Coty Kemmer")
    	// ->where(function($query){
    	// 	$query->where("rating", ">", 5)
    	// 		  ->orWhere("country", "=", "Luxembourg");
    	// })
    	// ->get();

    	//ORDER BY
    	// $customer = DB::table('customers')
    	// ->orderby('name', 'ASC')
    	// ->get();

    	// $customer = DB::table('customers')
    	// ->latest()
    	// ->first();

    	// $customer = DB::table('customers')
    	// ->inRandomOrder()
    	// ->first();

    	// $customer = DB::table('customers')
    	// ->select(DB::raw("count(id)as count, rating"))
    	// ->groupBy("rating")
    	// ->having("rating", ">", 4)
    	// ->get();

    	// $customer = DB::table("customers")
    	// ->offset(150)
    	// ->limit(5)
    	// ->get();



    	// return Response::json($customer);

    	// DB::table("customers")->insert([
    	// 	[
    	// 		"name" => "cedric",
    	// 		"email" => "aaa@gmai.com",
    	// 		"phone" => "111111",
    	// 		"address" => "Laguna PH",
    	// 		"country" => "PH",
    	// 		"rating" => 5
    	// 	],

    	// 	[
    	// 		"name" => "Sarah",
    	// 		"email" => "sara@gmai.com",
    	// 		"phone" => "222222",
    	// 		"address" => "Qezon PH",
    	// 		"country" => "PH",
    	// 		"rating" => 6
    	// 	]

    	// ]);


    	$id = DB::table("customers")->insertGetId(
    		[
    			"name" => "wally",
    			"email" => "waawaw@gmai.com",
    			"phone" => "55656",
    			"address" => "faga PH",
    			"country" => "PH",
    			"rating" => 9
    		]

    	);

    	return $id;

    }
}
