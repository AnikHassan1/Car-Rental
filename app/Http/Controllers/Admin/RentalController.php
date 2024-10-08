<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\User;
use App\Models\Rental;
use App\Models\rentals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RentalController extends Controller
{
    // function rentalAdmin()
    // {
    //     $rent = rentals::with('car', 'user')->get();
    //    return $rent;
    // }
    // function singleRental(Request $request){
    //     $user_id = $request->input('user_id');
    //     $car_id = $request->input('car_id');
    //     $start_date = $request->input('start_date');
    //     $end_date = $request->input('end_date');

    //     $user =User::where('id',$user_id)->get();
    //     $car =Car::where('id', $car_id)->get();
    //     $ran =rentals::where('car_id', $car_id)->where('user_id',$user_id)->get();

    //     return response()->json([
    //         "user"=>$user,
    //         "car"=>$car,
    //         "ran"=>$ran
    //     ],200);
    // }

    function RentalsPage()
    {
        $rentals = Rental::with('car', 'user')->get();
        //dd($rentals);
        return view('Pages.Admin.Rentals' , compact('rentals'));
    }
    function DeleteRental(Request $request){
        $id =$request->input('id');
        Rental::where('id',$id)->delete();
        return response()->json([
               "status"=>"success",
               "message"=>"Delete Rental Data"
        ]);
    }

    function deshboardList(){
        $car =Car::count();
        $rantal =Rental::count();
        $total_earn =Rental::sum('total_price');
        $availble = Car::where('availability','=','1')->count();

        return [
             'total_car'=>$car,
             'total_rantal'=>$rantal,
             'total_earn'=>$total_earn,
             'availble'=>$availble
        ];
    }

    function date(){
        $data = Rental::with('car','user')->get();
        return $data;
    }
}
