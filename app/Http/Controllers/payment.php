<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class payment extends Controller
{
    function add_fees(Request $fees)
    {

        $fees->validate([

            "sid" => 'required',
            "name" => 'required',
            "course" => 'required',
            "date_of_payment" => 'required',
            "fees" => 'required'

        ]);

        DB::table('fees')->insert([

            "sid" =>$fees->input('sid'),
            "name" =>$fees->input('name'),
            "course" =>$fees->input('course'),
            "date_of_payment" =>$fees->input('date_of_payment'),
            "fees" =>$fees->input('fees'),

        ]);
        return redirect('admin_dashboard');

    }
}
