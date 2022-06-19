<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class operationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $detail = student::paginate(10);
        return view('Dashboard.admin_dashboard', ['data' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stud = DB::table('students')->where('id', $id)->get();
        return view('update', ['student' => $stud]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        DB::table('students')->where('id', $id)->update([
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
            //   course deatai 
            'Course' => $data->input('Course'),
            'Authorisation' => $data->input('Authorisation'),
            'Fees' => $data->input('Fees'),
            'Duration' => $data->input('Duration'),
            'Discount' => $data->input('Discount'),
            'Batch_Time' => $data->input('Batch_Time'),
            'Net_Fees' => $data->input('Net_Fees'),
            'Discount_Offer' => $data->input('Discount_Offer'),
            'Join_Date' => $data->input('Join_Date'),
            'parent_Name' => $data->input('parent_Name'),
            'parent_Contact' => $data->input('parent_Contact'),
            'parent_Occupation' => $data->input('parent_Occupation'),
        ]);
        return redirect('admin_dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect('admin_dashboard');
    }

    public function find_bDay()
    {
        $birthday = DB::table('students')->where('BOD', date('Y-m-d'))->get();

        return view('Dashboard.birthday', ['birthdays' => $birthday]);
    }

    public function student_detail($id)
    {
        $detail = DB::table('students')->where('id', $id)->get();
        return view('student_detail', ['student' => $detail]);
    }
    //course table
    public function course(Request $display)
    {
        $display->validate([
            'courseName'=>'required'
        ]);
        DB::table('courses')->insert([
            'courseName'=>$display->input('courseName')
        ]);
        return redirect('admin_dashboard')->with('course added successfully...');
        
    }
    public function payment(Request $pay){
        
    }
    
}
