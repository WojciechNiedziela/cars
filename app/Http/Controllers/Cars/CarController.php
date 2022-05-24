<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Cars\CarService;



class CarController extends Controller
{
    public CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        // $car = DB::table('cars')->where('id', $id)->first();
        //$car = DB::table('cars')->find($id);
        $car = $this->carService->show($id);
        //dd($car);
        return view('cars.show', ['car' => $car]);
    }
    public function destroy($id)
    {
        $this->carService->destroy($id);
        return redirect()->route('cars.list');
    }
}