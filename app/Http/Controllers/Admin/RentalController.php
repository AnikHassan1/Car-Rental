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
        return $data->start_date;
    }
}
