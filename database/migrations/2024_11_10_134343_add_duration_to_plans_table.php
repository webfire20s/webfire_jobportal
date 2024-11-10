<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDurationToPlansTable extends Migration
{
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            // Adding the 'duration' column to manage subscription duration (in months)
            $table->integer('duration')->default(1); // Default is 1 month
        });
    }

    public function down()
    {
        Schema::table('plans', function (Blueprint $table) {
            // Dropping the 'duration' column if the migration is rolled back
            $table->dropColumn('duration');
        });
    }
}
