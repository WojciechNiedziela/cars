<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Cars\CarsService;

class CarsController extends Controller
{
    public CarsService $carsService;

    public function __construct(CarsService $carsService)
    {
        $this->carsService = $carsService;
    }

    public function list(Request $request)
    {
        $vin = $request->get('vin');
        $color = $request->get('color');
        $minPrice=$request->get('minPrice') ? $request->get('minPrice') : 0;
        $description = $request->get('description');
        //$cars = DB::table('cars')->where('vin','like', '%'. $vin . '%')->where('color','like', '%'. $color . '%')->where('price', '>', $minPrice)->get();
        // dd($description);
        $cars = $this->carsService->list($vin, $color, $minPrice, $description);
        // dd($cars);
        return view('cars.list', ['cars' => $cars]);
    }
}