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

        // dump($this->carModel->find($id));
        //dd($this->carModel->with('model')->find($id));
        return $this->carModel->with('brand')->find($id);
        //return $this->carModel->with('brand')->with('model')->find($id);
    }

    public function destroy($id)
    {

        //return $this->carModel->where('id', $id)->delete();
        return $this->carModel->destroy($id);
    }
}