<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
    <title>Admission_Form</title>

</head>
@foreach($student as $info)
@endforeach

<body>


    <div class="container-fluid  h-100">
        @include('Dashboard.sidebar')
        <div class="h-100 ">
            <form method="POST" enctype="multipart/form-data" class="border">
                <form method="POST" enctype="multipart/form-data" class="border shadow-lg mb-5">
                    @csrf
                    @method('PUT')
                    <div class="row w-100 ">

                        <div class="col-lg-6">


                            <div class="row w-100">
                                <h1 class="mr-auto ml-auto p-3">Personal Details</h1>
                            </div>


                            <div class="row w-100 p-4">

                                <div class="col-lg-6">

                                    <div class="form-group  col-sm-12">
                                        <label for="inputName" class="form-check-label">Full Name</label>
                                        <input type="text" placeholder="Full Name" name="Full_Name" class="form-control" value="{{$info->Full_Name}}">
                                        <span class="text-danger">@error('Full_Name'){{$message}} @enderror</span>
                                    </div>

                                    <div class="form-group  col-sm-12">
                                        <!-- <div class="form-group "> -->
                                        <label for="inputAddress" class="form-check-label">Address</label>
                                        <textarea name="Address" id="" placeholder="Address" class="form-control">{{$info->Address}}</textarea>
                                        <span class="text-danger">@error('Address'){{$message}} @enderror</span>
                                        <!-- </div> -->
                                    </div>

                                    <div class="form-group  col-sm-12">
                                        <label for="inputContact" class="form-check-label">Contact No</label>
                                        <input type="text" placeholder="Contact No" name="Contact_No" class="form-control" value="{{$info->Contact_No}}">
                                        <span class="text-danger">@error('Contact_No'){{$message}} @enderror</span>
                                    </div>

                                    <div class="form-group  col-sm-12">
                                        <label for="inputDate" class="form-check-label">Date Of Birth</label>
                                        <input type="date" placeholder="Date Of Birth" name="BOD" class="form-control" value="{{$info->BOD}}">
                                        <span class="text-danger">@error('BOD'){{$message}} @enderror</span>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="form-group">

                                        <label for="">Gender :</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="male" name="gender" value="male" @if($info->gender=='male' )checked @endif>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="female" name="gender" value="female" @if($info->gender=='female' )checked @endif >
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <span class="text-danger">@error('gender'){{$message}} @enderror</span>

                                    </div>

                                   
                                    <div class="form-group">
                                        <label for="inputQualification" class="form-check-label">Qualification</label>
                                        <input type="text" placeholder="Qualification" name="Qualification" class="form-control" value="{{$info->Qualification}}">
                                        <span class="text-danger">@error('Qualification'){{$message}} @enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                                        <input type="text" placeholder="Occupation" name="Occupation" class="form-control" value="{{$info->Occupation}}">
                                        <span class="text-danger">@error('Occupation'){{$message}} @enderror</span>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputCounselling_By" class="form-check-label">Counselling By</label>
                                        <input type="text" placeholder="Counselling By" name="Counselling_By" class="form-control" value="{{$info->Counselling_By}}">
                                        <span class="text-danger">@error('Counselling_By'){{$message}} @enderror</span>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="col-lg-6">


                            <div class="row w-100 ml-2">

                                <div class="row w-100">
                                    <h1 class="mr-auto ml-auto p-3">Course Details</h1>
                                </div>


                                <div class="row w-100 p-4">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Course" class="form-check-label">Course</label>
                                            <select name="Course" class="form-control" id="Course">
                                                <option value="" selected disabled>--Choose Courses--</option>
                                                @foreach($course_Data as $data)
                                                <option value="{{$data->courseName}}" @if($data->courseName==$info->Course) selected @endif>{{$data->courseName}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">@error('Course'){{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputAuthorisation" class="form-check-label">Authorisation</label>
                                            <input type="text" placeholder="Authorisation" name="Authorisation" class="form-control" value="{{$info->Authorisation}}">
                                            <span class="text-danger">@error('Authorisation'){{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputFees" class="form-check-label">Fees</label>
                                            <input type="text" placeholder="Fees" name="Fees" class="form-control" value="{{$info->Fees}}">
                                            <span class="text-danger">@error('Fees'){{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNet_Fees" class="form-check-label">Net Fees</label>
                                            <input type="text" placeholder="Net Amount" name="Net_Fees" class="form-control" value="{{$info->Net_Fees}}">
                                            <span class="text-danger">@error('Net_Fees'){{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDuration" class="form-check-label">Duration</label>
                                            <input type="text" placeholder="Duration" name="Duration" class="form-control" value="{{$info->Duration}}">
                                            <span class="text-danger">@error('Duration'){{$message}} @enderror</span>
                                        </div>




                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="inputDiscount" class="form-check-label">Discount</label>
                                            <input type="text" placeholder="Discount" name="Discount" class="form-control" value="{{$info->Discount}}">
                                            <span class="text-danger">@error('Discount'){{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputBatch" class="form-check-label">Batch Time</label>
                                            <input type="text" placeholder="Batch Time" name="Batch_Time" class="form-control" value="{{$info->Batch_Time}}">
                                            <span class="text-danger">@error('Batch_Time'){{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDiscount_Offer" class="form-check-label">Discount Offer</label>
                                            <input type="text" placeholder="Discount Offer" name="Discount_Offer" class="form-control" value="{{$info->Discount_Offer}}">
                                            <span class="text-danger">@error('Discount_Offer'){{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputJoin_Date" class="form-check-label">Join Date :</label>
                                            <input type="date" placeholder="Join_Date" name="Join_Date" class="form-control" value="{{$info->Join_Date}}">
                                            <span class="text-danger">@error('Join_Date'){{$message}} @enderror</span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- parents details -->

                    <div class="row w-100 ml-2">

                        <div class="col-6">
                            <h1 class="ml-auto mr-auto text-center">Parents Details</h1>

                            <div class="form-group  ">
                                <label for="inputName" class="form-check-label">Full Name</label>
                                <input type="text" placeholder="Full Name" name="parent_Name" class="form-control" value="{{$info->parent_Name}}">
                            </div>

                            <div class="form-group">
                                <label for="inputContact" class="form-check-label">Contact No</label>
                                <input type="text" placeholder="Contact No" name="parent_Contact" class="form-control" value="{{$info->parent_Contact}}">
                            </div>

                            <div class="form-group">
                                <label for="inputOccupation" class="form-check-label">Occupation</label>
                                <input type="text" placeholder="Occupation" name="parent_Occupation" class="form-control" value="{{$info->parent_Occupation}}">
                            </div>
                        </div>
                        <div class="col-6 text-center mb-2" style="margin-top:15%;">
                            <input type="submit" value="Update">
                            <a href="admission_form" class="reset text-white ml-3">Reset</a>
                        </div>

                    </div>
                </form>
        </div>
        <div class="container p-5">
            <div class="p-5"></div>
        </div>
</body>

</html>