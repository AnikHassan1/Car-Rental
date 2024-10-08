<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Mail\RentalNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RenFronContoller extends Controller
{
    function RentalPages(Request $request)
    {
        try{
             $email = $request->header('email');
            $user_id =$request->header('id');
            $car_id = $request->input('car_id');
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $total_price = $request->input('total_price');
    
            Rental::create([
                'user_id' => $user_id,
                'car_id' => $car_id,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'total_price' => $total_price
            ]);
            return response()->json([
                "status"=>"success",
                "message"=>"Created Rental"
            ]);
        }catch(Exception $e){
              $e->getMessage();
            }
       
        // $details = [
        //     'start_date' => $start_date,
        //     'end_date' => $end_date,
        //     'total_price' => $total_price
        // ];
        // Mail::to($email)->send(new RentalNotification($details));
        // $adminEmail = config('mail.admin_email');
        // Mail::to($adminEmail)->send(new RentalNotification($details, true));
        // return response()->json([
        //     "status" => "success",
        //     "message" => "Rent Confirm"
        // ], 200);
    }
    function rentalId(Request $request){
      return Rental::where('car_id',$request->id)->with('car','user')->first();
    }
}
