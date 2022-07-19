<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customers', function (Blueprint $table) {
            $table->bigIncrements('C_id');
            $table->string('C_name');
            $table->string('C_email')->unique;
            $table->string('C_phone');
            $table->string('C_address');
            $table->string('C_password');
            $table->unsignedBigInteger('A_id');
            $table->foreign('A_id')->references('A_id')->on('Admins');
    });

    Schema::create('Cart', function (Blueprint $table) {
        $table->bigIncrements('Cart_id');
        
        $table->unsignedBigInteger('P_id');
        $table->foreign('P_id')->references('P_id')->on('Products');

        $table->unsignedBigInteger('C_id');
        $table->foreign('C_id')->references('C_id')->on('Customers');


});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
