<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFarmerInfoToVendorDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendor_demands', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Reference to the user (vendor)
            $table->string('farmer_name')->nullable();
            $table->string('farmer_email')->nullable();
            $table->string('destination')->nullable();
            $table->string('phone')->nullable();

            // Foreign key constraint (assuming you have a users table)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendor_demands', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('farmer_name');
            $table->dropColumn('farmer_email');
            $table->dropColumn('destination');
            $table->dropColumn('phone');
        });
    }
}
