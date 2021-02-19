<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{

    //view all data
    public function index(){

        $customers = Customer::all();
        return response()->json($customers);
    }
    
   //insert data
    public function store(Request $request)
    {
        
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->save();
        return response()->json($customer);
    }

    //show data
    public function show($id){

        $customers = Customer::findOrFail($id);
        return response()->json($customers);
    }

    //update data
    public function update(Request $request, $id){

        $customer = Customer::findOrFail($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->save();
        return response()->json($customer);

    }

    //destroy data
    public function destroy($id){

        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json($customer);
    }

   
}
