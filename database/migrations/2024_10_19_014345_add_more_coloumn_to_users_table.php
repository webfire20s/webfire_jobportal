<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('shop_name')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode', 6)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('photo')->nullable();
            $table->string('aadhar_photo')->nullable();
            $table->string('pan_photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'shop_name', 
                'aadhar', 
                'mobile', 
                'address', 
                'state', 
                'pincode', 
                'status', 
                'photo', 
                'aadhar_photo', 
                'pan_photo'
            ]);
        });
    }
};
