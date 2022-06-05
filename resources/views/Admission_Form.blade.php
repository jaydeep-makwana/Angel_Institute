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

<body>


    <div class="container-fluid bg-light h-100">

        <form enctype="multipart/form-data">


            <div class="row w-100">

                <div class="col-lg-6">


                    <div class="row w-100">
                        <h1 class="mr-auto ml-auto p-1">Personal Details</h1>
                    </div>


                    <div class="row w-100">

                        <div class="col-lg-6">

                            <div class="form-group  col-sm-12">
                                <label for="inputName" class="form-check-label">Full_Name</label>
                                <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                            </div>

                            <div class="form-group  col-sm-12">
                                <!-- <div class="form-group "> -->
                                <label for="inputAddress" class="form-check-label">Address</label>
                                <textarea name="Address" id="" placeholder="Address" class="form-control"></textarea>
                                <!-- </div> -->
                            </div>

                            <div class="form-group  col-sm-6 ">
                                <label for="inputContact" class="form-check-label">Contact_No</label>
                                <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                            </div>

                            <div class="form-group  col-sm-6">
                                <label for="inputDate" class="form-check-label">Date_Of_Birth</label>
                                <input type="date" placeholder="Date_Of_Birth" name="Date_Of_Birth" class="form-control">
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">

                                <label for="">Gender :</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" value="option1" name="gender">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" value="option1" name="gender">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>

                            </div>

                            <div class="form-group">

                                <label for=""> Cast :</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="SC" value="SC">
                                    <label for="SC" class="form-check-label">SC</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="ST" value="ST">
                                    <label for="ST" class="form-check-label">ST</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="OBC" value="OBC">
                                    <label for="OBC" class="form-check-label">OBC</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="Gen" value="Gen">
                                    <label for="Gen" class="form-check-label">Gen</label>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputQualification" class="form-check-label">Qualification</label>
                                <input type="text" placeholder="Qualification" name="Qualification" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputOccupation" class="form-check-label">Occupation</label>
                                <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="inputCounselling_By" class="form-check-label">Counselling_By</label>
                                <input type="text" placeholder="Counselling_By" name="Counselling_By" class="form-control">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-6">


                    <div class="row w-100 ml-2">

                        <div class="row w-100">
                            <h1 class="mr-auto ml-auto">Course Details</h1>
                        </div>


                        <div class="row w-100">

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="inputCourse" class="form-check-label">Course</label>
                                    <input type="text" placeholder="Course" name="Course" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputAuthorisation" class="form-check-label">Authorisation</label>
                                    <input type="text" placeholder="Authorisation" name="Authorisation" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputFees" class="form-check-label">Fees</label>
                                    <input type="text" placeholder="Fees" name="Fees" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputDuration" class="form-check-label">Duration</label>
                                    <input type="text" placeholder="Duration" name="Duration" class="form-control">
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="inputDiscount" class="form-check-label">Discount</label>
                                    <input type="text" placeholder="Discount" name="Discount" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputBatch" class="form-check-label">Batch_Time</label>
                                    <input type="text" placeholder="Batch_Time" name="Batch_Time" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputNet_Fees" class="form-check-label">Net_Fees</label>
                                    <input type="text" placeholder="Discount" name="Discount" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputDiscount_Offer" class="form-check-label">Discount_Offer</label>
                                    <input type="text" placeholder="Discount_Offer" name="Discount_Offer" class="form-control">
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="row w-100">


                <div class="row w-100">
                    <h1 class="ml-auto mr-auto">Parents Details</h1>
                </div>


                <div class="row w-100">

                    <div class="col-lg-5">
                        <div class="form-group  ">
                            <label for="inputName" class="form-check-label">Full_Name</label>
                            <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="inputContact" class="form-check-label">Contact_No</label>
                            <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="inputOccupation" class="form-check-label">Occupation</label>
                            <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-1 mt-2">
                        <input type="submit" value="Submit">
                    </div>

                </div>

            </div>

        </form>
    </div>

</body>

</html>