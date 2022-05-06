<?php

namespace App\Http\Controllers;

use App\Models\NewConnection;
use App\Models\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\NewConnectionPostRequest;

class NewConnectionController extends Controller
{
    public function V1_list()
    {
        $newconnectionslist = NewConnection::all();
        $products = Products::where('display_in_enquiry', 1)
               ->orderBy('name')
               ->get();
        $count = count($newconnectionslist);
        $data = array(
            'newconnectionrequests' => $newconnectionslist,
            'products' => $products
        );
        $response = [
            'success' => true,
            'data' => $data,
            'count' => $count,
            'message' => '',
        ];
        return response()->json($response, 200);
    }
    
    public function V1_create(NewConnectionPostRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'mobile' => 'required|max:255',
            'requested_product_id' => 'required',
        ], [
            'max' => 'Your :attribute is too long!',
        ]);
        if ($validator->fails()) {
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
        } else {
            $validatedData = $request->validated();
            $exists = NewConnection::where([
                ['name', '=', "'".$validatedData['name']."'"],
                ['mobile', '=', "'".$validatedData['mobile']."'"],
            ])->get();
            if(count($exists)){
                $response = [
                    'success' => false,
                    'message' => 'A request already exists!',
                ];
                return response()->json($response, 400);
            } else {
                $validatedData['status'] = 'applied';
                $validatedData['created_on'] = \Carbon\Carbon::now()->toDateTimeString();
                $status = NewConnection::create($validatedData);
                $message = ($status->id > 0)?'New Connection Request created successfully':'New Connection Request creation failed ';
                $response = [
                    'success' => true,
                    'message' => $message,
                ];
                return response()->json($response, 200);
            }
        }
    }
    
    public function V1_details(Request $request){
        if($_REQUEST['id']>0):
            $exists = NewConnection::where([
                ['id', '=', $_REQUEST['id']]
            ])->get();
            $count = count($exists);
            $msg = ($count>0)?'Record retrieved succesfully.':'Unable to find the record.';
            $response = [
                'success' => true,
                'data' => $exists,
                'count' => count($exists),
                'message' => $msg,
            ];
            return response()->json($response, 200);
        else:
            $response = [
                'success' => false,
                'message' => $err_msg,
            ];
            return response()->json($response, 400);
        endif;
    }
    
}
