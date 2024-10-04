<?php

namespace App\Http\Controllers\Frontend;

use App\Models\rentals;
use Illuminate\Http\Request;
use App\Mail\RentalNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RenFronContoller extends Controller
{
    function RentalPages(Request $request)
    {
        $email = $request->header('email');
        $user_id = $request->header('id');
        $car_id = $request->input('car_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $total_price = $request->input('total_price');

        rentals::create([
            'user_id' => $user_id,
            'car_id' => $car_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'total_price' => $total_price
        ]);
        $details = [
            'start_date' => $start_date,
            'end_date' => $end_date,
            'total_price' => $total_price
        ];
        Mail::to($email)->send(new RentalNotification($details));
        $adminEmail = config('mail.admin_email');
        Mail::to($adminEmail)->send(new RentalNotification($details, true));
        return response()->json([
            "status" => "success",
            "message" => "Rent Confirm"
        ], 200);
    }
}
