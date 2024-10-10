<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Rental;
use App\Models\profile;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    public function SignUpUser(Request $request){
        $name =$request->input('name');
        $email =$request->input('email');
        $password =$request->input('password');

        try{
            User::create([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password

            ]);
            return response()->json( [
                'status' =>'success',
                'message' => 'User signup successful'
            ] );
        }catch(Exception $e){
          return response()->json([
           "status"=>"fail",
           "message"=>"Sign Up Fail"
          ]);
        }

    }
 public function LoginUser(Request $request){
    $email =$request->input('email');
    $password =$request->input('password');

    $data =User::where('email',$email)->first();

    if($data && Hash::check($password,$data->password)){

        if($data->role === 'admin'){
            $token =JWTToken::createToken($email,$data->id);
            return response()->json([
               "status"=>"success",
               "url"=>'/',
               "message"=>"Admin Login Successfull"
            ],200)->cookie('token',$token,60*60*60);
       }else{
          $token =JWTToken::createToken($email,$data->id);
          return response()->json([
           "status"=>"success",
           "url"=>'user',
           "message"=>"User Login Successfull"
        ],200)->cookie('token',$token,60*60*60);
       }
    }



 }

 public function ResetPassword(Request $request){
   try{
    $oldpass = $request->input('oldpassword');
    $newpass = $request->input('newPassword');
    $email   = $request->header('email');

    $data = User::where('email',$email)->where('password',$oldpass)->first();
    $data->password = $newpass;
    $data->save();
    return response()->json([
        "status"=>"success",
        "message"=>"Reset Password success"
    ]);
   }catch(exception $e){
    return response()->json([
        "status"=>"Failed",
        "message"=>"Reset Password Failed"
    ]);
   }
 }
 function Logout(Request $request){
    return response()->redirectTo("/login-page")->cookie('token','',-1);
 }
 function userId(Request $request){
  $user_id =$request->header('id');
 //return  $user_id;
    return User::where('id',$user_id)->first();
 }


 function ProfileUpdate(Request $request){
    $user_id = $request->header('id');
    $number = $request->input('number');
    $address = $request->input('address');

    profile::updateOrCreate([
        'user_id'=>$user_id,
        'number'=>$number,
        'address'=>$address
    ]);
    return response()->json([
        "status"=>"success",
        "message"=>"Profile Updated"
    ]);
 }
 function getProfile(Request $request){
    $user_id = $request->header('id');
    return profile::where('user_id',$user_id)->with('user')->first();
 }

 function userListByrent(){
    $users = User::with(['profile', 'Rental'])->get();
    return view('Pages.Admin.Customer', compact('users'));
 }

//  function deleteCustomer(Request $request){
//     $id = $request->input('id');
//     try {
//         $user = profile::findOrFail($id);
//         $rant = Rental::findOrFail($id);
//         $user->delete();
//         $rant->delete();

//         return response()->json([
//             'status' => 'success',
//             'message' => 'Customer deleted successfully.'
//         ]);
//     } catch (\Exception $e) {
//         return response()->json([
//             'status' => 'error',
//             'message' => 'Failed to delete customer: ' . $e->getMessage()
//         ], 500);
//     }
//  }

function existProfile(Request $request){
    $id = $request->header('id');
    $data =  profile::where('user_id',$id)->first();
    return $data;
      return response()->json([
        "status"=>"NProfile"
      ]);
    }
}

