<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourses extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('courses')->insert(array(
            'id' => 106,
            'name' => 'Fundamentals of Computer Science I',
            'credit_hours' => 3
        ));
        
        DB::table('courses')->insert(array(
            'id' => 110,
            'name' => 'Fundamentals of Computer Science II',
            'credit_hours' => 3
        ));

        DB::table('courses')->insert(array(
            'id' => 210,
            'name' => 'Digital Logic Design',
            'credit_hours' => 3
        ));

        DB::table('courses')->insert(array(
            'id' => 218,
            'name' => 'Digital Logic Design Lab',
            'credit_hours' => 1
        ));
        DB::table('courses')->insert(array(
            'id' => 233,
            'name' => 'Diffirential Equations',
            'credit_hours' => 3
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table(courses)->delete();
    }
}
