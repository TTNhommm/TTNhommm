<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getCustomer()
    {
        return view('backend.user.userCustomer');
    }
    public function getUser()
    {
        return view('backend.user.userEmployee');
    }
    public function getUserCreate()
    {
        return view('backend.user.userEmployeeCreate');
    }
    public function getUserShow()
    {
        return view('backend.user.userEmployeeShow');
    }
    public function getUserEdit()
    {
        return view('backend.user.userEmployeeEdit');
    }
    // public function getUserCreate()
    // {
    //     return view('backend.user.userCreate');
    // }
}
