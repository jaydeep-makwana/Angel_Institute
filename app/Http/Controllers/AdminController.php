<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin_login(Request $input)
    {
        $input->validate([
            // 'fname' => 'required | min:14 | max:20',
            // 'lname' => 'required | min:20 | max:24',
            // 'phone' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
            // 'confirm_passsword' =>  'required | same:password',
            // 'code' => 'required'
        ]);

        DB::table('admins')->insert([

            'fname' => $input->input('fname'),
            'lname' => $input->input('lname'),
            'phone' => $input->input('phone'),
            'email' => $input->input('email'),
            'password' => $input->input('password'),
            'confirm_password' => $input->input('confirm_password'),
            'code' => $input->input('code')
        ]);

        // if (Auth::guard('admin')->attempt($input->only('email', 'password'))) {


        //     echo  'admin logged';
        // } else {
        //     return  $input->input();
        // }
        return redirect('login')->with('status', 'you are successfully ragistered..');
    }

    function login(Request $data)
    {
        $data->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = DB::table('admins')->where('email')->get();
        if ($data == $email) {

            $$email->session()->put('email', $data['email']);
            return redirect('admin_dasboard');
        }
        // return redirect('admin_dasboard');
    }
}
