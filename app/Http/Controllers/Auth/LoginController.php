<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    public function getlogin()
    {
        return view('backend.login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (\Auth::attempt($credentials)) {
            return redirect()->route('admin.home');
        }
    }public function logout()
    {
        \Auth::logout();
        return redirect()->route('admin.home');
    }
}
