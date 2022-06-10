<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('Full_Name',100);
            $table->text('Address');
            $table->bigInteger('Contact_No');
            $table->date('BOD');
            $table->string('gender');
            $table->string('cast');
            $table->string('Qualification');
            $table->string('Occupation');
            $table->string('Counselling_By');
            $table->string('Course');
            $table->string('Authorisation');
            $table->integer('Fees');
            $table->string('Duration');
            $table->string('Discount');
            $table->string('Batch_Time');
            $table->integer('Net_Fees');
            $table->string('Discount_Offer');
            $table->date('Join_Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
