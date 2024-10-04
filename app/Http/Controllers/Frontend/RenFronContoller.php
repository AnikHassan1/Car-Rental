<?php

namespace App\Http\Controllers\Frontend;

use App\Models\rentals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenFronContoller extends Controller
{
    function RentalPages(Request $request){
        $user_id = $request->header('id');
         // return $user_id;
        $car_id = $request->input('car_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $total_price = $request->input('total_price');

        rentals::create([
         'user_id'=>$user_id,
         'car_id'=> $car_id,
         'start_date'=>$start_date,
         'end_date'=> $end_date,
         'total_price'=>$total_price
        ]);
        return response()->json([
            "status"=>"success",
            "message"=>"Rent Confirm"
        ],200);
    }
}
