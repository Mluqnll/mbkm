<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return View ('login');
    }


    public function loginProcess(){

        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('/admin')->with('success', 'Login Berhasil');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('login');
    }
}
