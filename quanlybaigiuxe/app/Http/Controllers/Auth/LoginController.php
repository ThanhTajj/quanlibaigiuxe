<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        return redirect('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang');
    }
}