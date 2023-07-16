<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Station;
use App\Models\Car_station;

class ListController extends Controller
{
    public function index()
    {
        $cars = Car::All();
        $stations = Station::All();
        return view('list', [
            'cars' => $cars,
            'stations' => $stations
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'car'    => 'required',
            'station'    => 'required',
        ]);

        Car_station::where('car_id', $request->car)->update([
            'station_id' => $request->station
        ]);
    }
}
