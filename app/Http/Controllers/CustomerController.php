<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showData()
    {
        $customers = Customer::orderBy('id')->paginate(100);
        return view('customer-data', compact('customers'));
    }

    public function showAPI()
    {
        return Customer::orderBy('id')->paginate(20);
    }

    public function destroy($customer_id)
    {
        $customer = Customer::find($customer_id);
        if($customer){
            $customer->delete();
            $message = "Data deleted Successfully";
        }else{
            $message = "Something went wrong !";
        }
        return redirect('/customers-data')->with('message', $message);
    }
}
