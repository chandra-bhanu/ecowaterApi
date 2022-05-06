<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


use App\Models\Employees;
use App\Models\AdminUser;


/**
 * Description of EmployeeController
 *
 * @author KLDeepak
 */
class EmployeeController extends Controller
{
    public function signup_V1(Request $request)
    {
        $postData= json_decode($request->getContent());
        
        $exists = Employees::where([
            ['mobile', $postData->number],
        ])->get();
        
        if(count($exists)):
             $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => null,
                                'mobile' => '',
                                'name' => '',
                                'isAdmin' =>0,
                           ),
                            'message' => 'Mobile number already registered!'
                        ];
        else:
            $employees = new Employees;        
            $employees->device_id=$postData->deviceid;
            $employees->name=$postData->name;
            $employees->mobile=$postData->number;
            $employees->password=Hash::make($postData->password);
            $employees->save();
            
            if($employees->id):
                $response = [
                                'success' => "true",
                                'data' => array(
                                    'id' => $employees->id,
                                    'mobile' => $postData->number,
                                    'name' => $postData->name,
                                    'isAdmin' =>0,
                                ),
                                'message' => 'Registration Successful, Please wait for Approval!'
                            ];
            else:  
                $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => null,
                                'mobile' => '',
                                'name' => '',
                                'isAdmin' =>0,
                            ),
                            'message' => 'Registration failed!'
                        ];
                
            endif;
         endif;
         
         return response()->json($response, 200);
     }   
     
     public function employeeList_V1($id=null)
     {
       
         if($id)://If ID passed for single user data
            $employee=Employees::find($id);
            if($employee && $employee->count()>0):
                $response = [
                                'success' => "true",
                                'data' => $employee->toArray(),
                                'message' => ($employee->count()).' Records'
                            ];
            else:
                $response = [
                                'success' => "false",
                                'data' => array(),
                                'message' => 'Invalid Employee!'
                            ]; 
            endif;         
         else://If get user list 
             $employees=Employees::orderByDesc('id')->get()->toArray();
            if(count($employees)>0):
                $response = [
                                'success' => "true",
                                'data' => $employees,
                                'message' => count($employees).' Records'
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


     public function employeeUpdate_V1(Request $request)
    {
        $postData= json_decode($request->getContent());
         $employee=Employees::find($postData->id);
         if($employee && $employee->count()>0):
             
             $exists = Employees::where([
                                ['mobile', $postData->number],
                                ['id','!=',$postData->id]
                        ])->get();
             
            if(count($exists)):
                $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => $postData->id,
                                'mobile' => $postData->number,
                                'name' => $postData->name
                            ),
                            'message' => 'Mobile number already registered!'
                        ];
            else:
                //Do Update 
                $employee->name=$postData->name;
                $employee->mobile=$postData->number;
                if($postData->password !=''):
                    $employee->password=Hash::make($postData->password);
                endif;
                $employee->status=$postData->status;
                $employee->type=$postData->type;
                $employee->save();

                //Refetch
                $newemployee=Employees::find($postData->id);

                 //Send Return Data
                $response = [
                                    'success' => "true",
                                    'data' => $newemployee->toArray(),
                                    'message' =>'Employee Updated!'
                                ];
            endif;
        else:
            $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => $postData->id,
                                'mobile' => $postData->number,
                                'name' => $postData->name
                            ),
                            'message' => 'Invalid Employee!'
                        ]; 
         endif;
         
         
        return response()->json($response, 200);
        
    }
    
    
    public function login_V1(Request $request)
    {
        $postData= json_decode($request->getContent());
       
        $employee = Employees::where([
            ['mobile', $postData->number],
        ])->first();
        
        
        if($employee && $employee->count()>0):
            //Validate Password
            if (password_verify($postData->password, $employee->password)):
               //Validate Status
               if($employee->status==1):
                            $response = [
                                'success' => "true",
                                'data' => array(
                                    'id' => $employee->id,
                                    'mobile' => $employee->mobile,
                                    'name' => $employee->name,
                                    'isAdmin' =>0,
                                ),
                                'message' => 'Login Successful!'
                            ];
               
                    //log record 
                    $employee->last_logged_in=Carbon::now()->timezone('Asia/Kolkata');
                    $employee->save();
               else:
                   //Return 
                    $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => null,
                                'mobile' => '',
                                'name' => '',
                                'isAdmin' =>0,
                           ),
                            'message' => 'Acount is not active, Please contact management!'
                        ];
               endif;
            else:    
                 $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => null,
                                'mobile' => '',
                                'name' => '',
                                'isAdmin' =>0,
                           ),
                            'message' => 'Invalid Credentials!'
                        ];
            endif;
        else:
            
            //CHECK IN ADMIN TABLE
            $admin = AdminUser::where([
            ['mobile', $postData->number],
            ])->first();
        
            if($admin && $admin->count()>0):
               //Validate Password
                if (password_verify($postData->password, $admin->password)):
                   //Validate Status
                   if($admin->status==1):
                                $response = [
                                    'success' => "true",
                                    'data' => array(
                                        'id' => $admin->id,
                                        'mobile' => $admin->mobile,
                                        'name' => $admin->name,
                                        'isAdmin' =>1,
                                    ),
                                    'message' => 'Welcome Admin!'
                                ];

                        //log record 
                        $admin->last_logged_in=Carbon::now()->timezone('Asia/Kolkata');
                        $admin->save();
                   else:
                       //Return 
                        $response = [
                                'success' => "false",
                                'data' => array(
                                    'id' => null,
                                    'mobile' => '',
                                    'name' => '',
                                    'isAdmin' =>0,
                               ),
                                'message' => 'Acount is Suspended!'
                            ];
                   endif;
                else:    
                     $response = [
                                'success' => "false",
                                'data' => array(
                                    'id' => null,
                                    'mobile' => '',
                                    'name' => '',
                                    'isAdmin' =>0,
                               ),
                                'message' => 'Invalid Credentials!'
                            ];
                endif;
            else:
                 $response = [
                                'success' => "false",
                                'data' => array(
                                    'id' => null,
                                    'mobile' => '',
                                    'name' => '',
                                    'isAdmin' =>0,
                               ),
                                'message' => 'Invalid Credentials!'
                            ];
            endif;
                         
        endif;
        
        return response()->json($response, 200);
        
    }
    
    public function adminProfile_V1($id)
    {
        $employee= AdminUser::find($id);
            if($employee && $employee->count()>0):
                $response = [
                                'success' => "true",
                                'data' => $employee->toArray(),
                                'message' => ($employee->count()).' Records'
                            ];
            else:
                $response = [
                                'success' => "false",
                                'data' => array(),
                                'message' => 'Invalid Employee!'
                            ]; 
            endif; 
        return response()->json($response, 200);    
    }
    
    
    public function adminUpdate_V1(Request $request)
    {
        $postData= json_decode($request->getContent());
         $employee=AdminUser::find($postData->id);
         if($employee && $employee->count()>0):
             
             $exists = AdminUser::where([
                                ['mobile', $postData->number],
                                ['id','!=',$postData->id]
                        ])->get();
             
            if(count($exists)):
                $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => $postData->id,
                                'mobile' => $postData->number,
                                'name' => $postData->name
                            ),
                            'message' => 'Mobile number already registered!'
                        ];
            else:
                //Do Update 
                $employee->name=$postData->name;
                $employee->mobile=$postData->number;
                if($postData->password !=''):
                    $employee->password=Hash::make($postData->password);
                endif;
                $employee->status=$postData->status;
                $employee->save();

                //Refetch
                $newemployee=AdminUser::find($postData->id);

                 //Send Return Data
                $response = [
                                    'success' => "true",
                                    'data' => $newemployee->toArray(),
                                    'message' =>'Account Updated!'
                                ];
            endif;
        else:
            $response = [
                            'success' => "false",
                            'data' => array(
                                'id' => $postData->id,
                                'mobile' => $postData->number,
                                'name' => $postData->name
                            ),
                            'message' => 'Invalid User!'
                        ]; 
         endif;
         
         
        return response()->json($response, 200);
        
    }
    
    
    
    
}
