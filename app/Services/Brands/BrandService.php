<?php

namespace App\Services\Brands;

use App\Models\Cars\Brand;

class BrandService
{

    public Brand $brandModel;

    public function __construct(Brand $brandModel)
    {
        $this->brandModel = $brandModel;
    }

    public function show($id)
    {

        // dump($this->carModel->find($id));
        //dd($this->carModel->with('model')->find($id));
        return $this->brandModel->find($id);
        //return $this->carModel->with('brand')->with('model')->find($id);
    }

    public function destroy($id)
    {

        //return $this->carModel->where('id', $id)->delete();
        return $this->brandModel->destroy($id);
    }
}