<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;


class CarsService
{

    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }

    public function list($vin, $color, $minPrice, $description)
    {

        return $this->carModel->with(['brand', 'model'])->filterByVin($vin)->filterByColor($color)->filterByMinPrice($minPrice)->filterByDescription($description)->get();
    }
}