<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;

class CarService
{

    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }

    public function show($id)
    {
        return $this->carModel->with('brand')->find($id);
        
    }

    public function destroy($id)
    {

        //return $this->carModel->where('id', $id)->delete();
        return $this->carModel->destroy($id);
    }

    public function create($car)
    {
        $this->carModel::create($car);
    }
}