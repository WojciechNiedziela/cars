<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;
//use Illuminate\Support\Facades\DB;

class CarsService
{

    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }

    public function list($vin, $color, $minPrice, $description)
    {

        return $this->carModel->filterByVin($vin)->FilterByColor($color)->FilterByMinPrice($minPrice)->FilterByDescription($description)->get();
    }
}