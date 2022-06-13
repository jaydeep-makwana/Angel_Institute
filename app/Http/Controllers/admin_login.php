<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class admin_login extends Controller
{
    function login(Request $data)
    {
        $data->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = DB::table('admins')->where('email')->get();
        return redirect('admin_dashboard');
    }
}
