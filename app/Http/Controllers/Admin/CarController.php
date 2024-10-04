<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Exception;

class CarController extends Controller
{
    public function CarList()
    {
        $data = Car::get();
        return $data;
    }

    public function CarId(Request $request)
    {
        $carId = $request->input('id');
        $data = Car::where('id', $carId)->first();
        return $data;
    }
    public function CreateCar(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'brand' => ['required', 'max:255'],
            'model' => ['required', 'max:255'],
            'year' => ['required', 'max:255'],
            'car_type' => ['required', 'max:255'],
            'daily_rent_price' => ['required', 'max:255'],
            'availability' => ['required', 'max:5'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']

        ]);

        $img = $request->file('image');

        $img_name = "car_" . time() . "." . $img->getClientOriginalExtension();
        $img_url = "uploads/cars/{$img_name}";
        $img->move(public_path('uploads/cars/'), $img_name);

        return Car::create([
            'name' => $request->input('name'),
            'brand' =>  $request->input('brand'),
            'model' =>  $request->input('model'),
            'year' =>  $request->input('year'),
            'car_type' =>  $request->input('car_type'),
            'daily_rent_price' =>  $request->input('daily_rent_price'),
            'availability' =>  $request->input('availability'),
            'image' => $img_url
        ]);
    }

    public function updateCar(Request $request)
    {
        try{
            if ($request->hasFile('image')) {
            
                $id = $request->input('id');
                $img = $request->file('image');
    
                // $filepath = $request->input("filePath");
                $oldImage = Car::where("id", $id)->first();
                 unlink($oldImage->image);
    
                $img_name = "car_" . time() . "." . $img->getClientOriginalExtension();
                $img_url = "uploads/cars/{$img_name}";
                $img->move(public_path('uploads/cars/'), $img_name);
    
                Car::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'brand' =>  $request->input('brand'),
                    'model' =>  $request->input('model'),
                    'year' =>  $request->input('year'),
                    'car_type' =>  $request->input('car_type'),
                    'daily_rent_price' =>  $request->input('daily_rent_price'),
                    'availability' =>  $request->input('availability'),
                    'image' => $img_url
                ]);
    
                return response()->json([
                    "status" => "success",
                    "message" => "Image Update Successful"
                ], 200);
            } else {
                Car::where('id', $request->input("id"))->update([
                    'name' => $request->input('name'),
                    'brand' =>  $request->input('brand'),
                    'model' =>  $request->input('model'),
                    'year' =>  $request->input('year'),
                    'car_type' =>  $request->input('car_type'),
                    'daily_rent_price' =>  $request->input('daily_rent_price'),
                    'availability' =>  $request->input('availability')
    
                ]);
                return response()->json([
                    "status" => "success",
                    "message" => "Update Data Successful"
                ]);
            }

        } catch (\throwable $th){
            return response()->json([
                "status" =>"failed",
                "message" => "Something Went Wrong",
                "error" => $th->getMessage(),
            ]);
        }
       
    }

    public function deleteCar(Request $request){
        $car_id =$request->input('id');
        $carPath =$request->input('image');
        file::delete($carPath);
         Car::where('id',$car_id)->delete();
         return response()->json([
               "status"=>"success",
               "message"=>"Delete Car Data Successful"
         ]);
    }

    public function contact(Request $request){
        try{
            contact::create([
                "name"=>$request->input('name'),
                "email"=>$request->input('email'),
                "number"=>$request->input('number'),
                "message"=>$request->input('message'),
             ]);
             return response()->json([
                   "status"=>"success",
                   "message"=>"Contact Data Submited"
             ]);
        }catch(Exception $e){
            return response()->json([
                "status"=>"fail",
                "message"=>"Contact Data not  Submited"
          ]);
        }
       
    }
}
