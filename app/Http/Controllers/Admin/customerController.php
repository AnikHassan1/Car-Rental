<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\JWTToken;
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

    $data =User::where('email',$email)->where('password',$password)->first();

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
}
