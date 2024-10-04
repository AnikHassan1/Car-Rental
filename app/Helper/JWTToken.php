<?php
namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{

public static function createToken($userEmail,$userId){
        $key =env('JWT_key');
        $playload = [
        'iss'=>"Car-Rental",
        'ist'=>time(),
        'exp'=>time()+60 * 60 * 24 * 365,
        'userEmail'=>$userEmail,
        'userId'=>$userId
        ];
return JWT::encode($playload,$key,'HS256');
}

public static function verifyToken($token){

        try{
        if($token == null){
          return "unauthorized";
         }
        }catch(Exception $e){
          $key =env('JWT_key');
         return JWT::decode($token,new key($key,'HS256'));
         }
        }
}
