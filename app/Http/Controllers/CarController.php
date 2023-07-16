<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Car_station;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::All();
        $data = [];
        foreach($cars as $car)
        {
            $obj = ['car' => $car->title, 'driver' => $car->driver->title, 'stations' => $car->stations];
            array_push($data, $obj);
        }
        dd($data);
        return view('welcome', [
            'data' => $data
        ]);
    }
}
