<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admisssion_form extends Controller
{
    function operation(Request $data)
    {
        $data->validate([
            // personal detail
            // 'Full_Name' => 'required',
            // 'Address' => 'required',
            // 'Contact_No' => 'required | numeric | digits:10',
            // 'BOD' => 'required | date',
            // 'gender' => 'required',
            // 'Qualification' => 'required',
            // 'Occupation' => 'required',
            // 'Counselling_By' => 'required',

            // // course detail
            // 'Course' => 'required',
            // 'Authorisation' => 'required',
            // 'Fees' => 'required | numeric',
            // 'Duration' => 'required',
            // 'Discount' => 'required',
            // 'Batch_Time' => 'required',
            // 'Net_Fees' => 'required',
            // 'Join_Date' => 'required',
             // parents detail
            // "parent_Name"=>"required",
            //  "p arent_Contact"=>"required | digits:10 |numeric",
            //  "parent_Occupation"=>"required"
        ]);

        DB::table('students')->insert([
            // personal detail
            'Full_Name' => $data->input('Full_Name'),
            'Address' => $data->input('Address'),
            'Contact_No' => $data->input('Contact_No'),
            'BOD' => $data->input('BOD'),
            'gender' => $data->input('gender'),
            'cast' => $data->input('cast'),
            'Qualification' => $data->input('Qualification'),
            'Occupation' => $data->input('Occupation'),
            'Counselling_By' => $data->input('Counselling_By'),
            //   course detail 
            'Course' => $data->input('Course'),
            'Authorisation' => $data->input('Authorisation'),
            'Fees' => $data->input('Fees'),
            'Duration' => $data->input('Duration'),
            'Discount' => $data->input('Discount'),
            'Batch_Time' => $data->input('Batch_Time'),
            'Net_Fees' => $data->input('Net_Fees'),
            'Discount_Offer' => $data->input('Discount_Offer'),
            'Join_Date' => $data->input('Join_Date'),
            //   parents detail 
            'parent_Name' => $data->input('parent_Name'),
            'parent_Contact' => $data->input('parent_Contact'),
            'parent_Occupation' => $data->input('parent_Occupation'),
        ]);
        return redirect('admin_dashboard');
    }
}
