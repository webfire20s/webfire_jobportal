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
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('month')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->enum('status', ['pending', 'approved', 'reject'])->default('pending');
            $table->date('purchase_date')->nullable();

            // Remove the 'approved' column
            $table->dropColumn('approved');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(['month', 'price', 'status', 'purchase_date']);

            // Restore the 'approved' column
            $table->boolean('approved')->default(0);
        });
    }
};
