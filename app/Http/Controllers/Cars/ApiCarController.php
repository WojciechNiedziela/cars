<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Cars\CarService;


class ApiCarController extends Controller
{

    public CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        $car = $this->carService->show($id);
        return response()->json(['car' => $car]);
    }

    public function create(Request $request)
    {
        $car = $request->all();
        $this->carService->create($car);
        return response()->json(['message' => "prawidłowo dodano"]);
    }
    public function update($id, Request $request)
    {
        $newCar=$request->all();
        $this->carService->update($id, $newCar);
        return response()->json(['message' => "prawidłowo zaktualizowano"]);
    }

    public function destroy($id)
    {
        $this->carService->destroy($id);
        return response()->json(['message' => "prawidłowo usunięto"]);
    }


}


