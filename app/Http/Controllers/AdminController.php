<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin_login(Request $input){
        if(Auth::attempt($input->only('email','password'))){

            return  'admin logged';
        }else{
            return redirect('login');
        }
        
    }
}
