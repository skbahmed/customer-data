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
        try{
            $customers = Customer::orderBy('id')->get();
            return response
            ([
                'message' => 'Showing all the data successfully',
                'customer' => $customers
            ]);
        }
        catch(Exception $ex){
            return response
            ([
                'message' => $ex->getMessage()
            ]);
        }
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
