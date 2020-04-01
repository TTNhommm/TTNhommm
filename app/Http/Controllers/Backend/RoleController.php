<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getRoleCreate()
    {
        return view('backend.user.userRoleCreate');
    }public function getRoleEdit()
    {
        return view('backend.user.userRoleEdit');
    }
}
