<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin_login(Request $input)
    {
        $input->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($input->only('email', 'password'))) {


            echo  'admin logged';
        } else {
            return  $input->input();
        }
    }
}
