<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Brands\BrandsService;


class BrandsController extends Controller
{
    public BrandsService $brandsService;

    public function __construct(BrandsService $brandsService)
    {
        $this->brandsService = $brandsService;
    }

    public function list()
    {
        //$brands = DB::table('brands')->get();
        //dd($brands);
        $brands = $this->brandsService->list();
        return view('brands.list', ['brands' => $brands]);
    }
}