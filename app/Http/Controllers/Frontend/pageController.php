<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\rentals;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class pageController extends Controller
{
    function AdminPage()
    {
        return view('Pages.Admin.admin');
    }
    function HomePage(Request $request)
    {
        try {
            if ($request->cookie('token') === null) {
                return view("Pages.Frontend.home");
            } else {
                $token = $request->cookie('token');
                $data = JWTToken::verifyToken($token);
                $user = User::where('email', $data->userEmail)
                    ->where('id', $data->userId)
                    ->where('role','customer')
                    ->first();
                   echo($user);
                if ($user) {
                    return view("Pages.Frontend.home", ['user' => $user]);
                } else {
                    return view("Pages.Frontend.home");
                }
            }
        } catch (Exception $e) {
            return view("Pages.Frontend.home")->with(['error'=>'Invalid session or token']);
        }
    }
    function SignUp()
    {
        return view("Pages.Auth.Signup");
    }
    function Login()
    {
        return view("Pages.Auth.SignIn");
    }
    function ResetPage()
    {
        return view("Pages.Auth.Reset");
    }
    function DetailsPage(Request $request)
    {
        $id = $request->id;
        return view("Pages.Frontend.Details", compact('id'));
    }

    function RentalPage()
    {
        return view('Pages.Frontend.Rental');
    }
    function AboutPage()
    {
        return view('Pages.Frontend.About');
    }

    function CustomerPages()
    {
        return view('Pages.Admin.Customer');
    }
    function Dashboard()
    {
        return view('Pages.Admin.Deshboard');
    }
    function CarPage()
    {
        return view('Pages.Admin.Car');
    }
   
    function ContactPage()
    {
        return view('Pages.Frontend.Contact');
    }
    function RentalPages(Request $request)
    {
        $id = $request->id;
        return view('Pages.Frontend.RentalCreate',compact('id'));
    }
    function billPay(){
        return view('Pages.Frontend.Pay');
    }
}
