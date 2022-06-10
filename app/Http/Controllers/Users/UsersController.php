<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function list()
    {
        $users = DB::table('users')->get();
        //dd($models);
        return view('users.list', ['users' => $users]);
    }
}
