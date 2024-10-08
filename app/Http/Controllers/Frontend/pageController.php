<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\profile;
use App\Models\rentals;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class pageController extends Controller
{
    public function getUserFromToken(Request $request)
    {
        try {
            $token = $request->cookie('token');

            if ($token) {
                $data = JWTToken::verifyToken($token);
                return User::where('email', $data->userEmail)
                    ->where('id', $data->userId)
                    ->where('role', 'customer')
                    ->first();
            }

            return null; // No token, return null
        } catch (Exception $e) {
            return null; // Return null in case of an error
        }
    }

    function AdminPage()
    {
        return view('Pages.Admin.admin');
    }
    function HomePage(Request $request)
    {
       $user =$this->getUserFromToken($request);
       return view('Pages.Frontend.home',['user'=>$user]);
    }
    function SignUp()
    {
        return view("Pages.Auth.Signup");
    }
    function Login()
    {
        return view("Pages.Auth.SignIn");
    }
    function userLogOut()
    {
        return view("Pages.Auth.Logout");
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

    function RentalPage(Request $request)
    {
        $user =$this->getUserFromToken($request);
        return view('Pages.Frontend.Rental',['user'=>$user]);
    }
    function AboutPage(Request $request)
    {
        $user = $this->getUserFromToken($request);
        return view('Pages.Frontend.About',['user'=>$user]);
    }

  
    function Dashboard()
    {
        return view('Pages.Admin.Deshboard');
    }
    function CarPage()
    {
        return view('Pages.Admin.Car');
    }

    function ContactPage(Request $request)
    {
        $user =$this->getUserFromToken($request);
        return view('Pages.Frontend.Contact',['user'=>$user]);
    }
    function RentalPages(Request $request)
    {
        $id = $request->id;
        return view('Pages.Frontend.RentalCreate', compact('id'));
    }
    function billPay(Request $request)
    {
        $id = $request->id;
        return view('Pages.Frontend.Pay', compact('id'));
    }
    function ProfilePage()
    {
        return view('Component.frontend.Profile');
    }

    function carsSearch()
    {
        return view('Pages.Frontend.CarSearch');
    }
}
