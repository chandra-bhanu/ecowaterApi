<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\Customer;
use App\Models\Products;
use App\Models\CustomerProduct;
use App\Models\CustomerInventory;

use App\Http\Requests\NewCustomerPostRequest;

class CustomerController extends Controller
{
    
    public function V1_create(NewCustomerPostRequest $request)
    {
        print_r($request->all());
        die();
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'mobile' => 'required|max:255',
            'requested_product_id' => 'required',
        ], [
            'max' => 'Your :attribute is too long!',
        ]);
        if ($validator->fails()):
            $errors = $validator->errors();
            if ($errors->has('name'))
                $err_msg = $errors->get('name')[0];
            else if ($errors->has('mobile'))
                $err_msg = $errors->get('mobile')[0];
            else if ($errors->has('product_id'))
                $err_msg = $errors->get('product_id')[0];
            $response = [
                'success' => false,
                'message' => $err_msg,
            ];
            return response()->json($response, 400);
        else:
            $validatedData = $request->validated();
            
        endif;
    }
    
    
    public function customerListV1($id=null)
    {
        $customersData=array();
        if($id)://If ID passed for single  data
        else:
          $customers=Customer::where('account_status','active')->orderBy('id', 'ASC')->get();  
          if($customers && $customers->count()>0):
                foreach($customers as $key => $customer):
                    $tempData['id']=$customer->id;
                    $tempData['name']=$customer->name;
                    $tempData['mobile']=($customer->mobile=='')?'0':$customer->mobile;
                    $tempData['address']=ucfirst(strtolower($customer->delivery_address));
                    array_push($customersData,$tempData);                    
                endforeach;
                    
                
          
                $response = [
                                'success' => "true",
                                'data' => $customersData,
                                'message' => $customers->count().' Records'
                            ];
            else:
               $response = [
                                'success' => "false",
                                'data' => array(),
                                'message' => 'No Employees Found!'
                            ]; 
            endif; 
        endif; 
        return response()->json($response, 200);
    }
    
    
    
}