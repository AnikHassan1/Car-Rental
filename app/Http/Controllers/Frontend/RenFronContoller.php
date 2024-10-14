<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\Car;
use App\Models\User;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Mail\RentalNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RenFronContoller extends Controller
{
    function RentalPages(Request $request)
    {
        try {
            $email = $request->header('email');
            $user_id = $request->header('id');
            $car_id = $request->input('car_id');
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $total_price = $request->input('total_price');
            $car = Car::where('id', $car_id)->first();
            $user = User::where('id', $user_id)->first();

            if ($car->availability == '1') {
                Rental::create([
                    'user_id' => $user_id,
                    'car_id' => $car_id,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'total_price' => $total_price
                ]);

                $details = [
                    'user_name' => $user->name,
                    'car_name' => $car->name,
                    'start_date' => $request->input('start_date'),
                    'end_date' => $request->input('end_date'),
                    'total_price' => $request->input('total_price')
                ];
                Mail::to($request->header('email'))->send(new RentalNotification($details));

                $adminEmail = config('mail.admin_email');

                Mail::to($adminEmail)->send(new RentalNotification($details, true));
                return response()->json([
                    "status" => "success",
                    "message" => "Created Rental"
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                "status" => "fails",
                "message" => "Created Rental fail"
            ]);
        }
    }


    function rentalId(Request $request)
    {
        return Rental::where('car_id', $request->id)->with('car', 'user')->first();
    }
}
