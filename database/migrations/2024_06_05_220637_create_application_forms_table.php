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
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('state')->nullable();
            $table->text('lga')->nullable();
            $table->text('address')->nullable();



            //$table->string('dept')->nullable();
            $table->text('nok')->nullable();
            $table->text('r_nok')->nullable();
            $table->text('a_nok')->nullable();
            $table->text('phone_nok')->nullable();

            $table->text('prev_exam_no')->nullable();
            $table->text('prev_type_exam')->nullable();
            $table->text('prev_exam_year')->nullable();



            $table->string('progamme_type')->nullable();
            $table->string('progamme_category')->nullable();
            $table->string('course')->nullable();
            $table->text('center')->nullable();

            $table->text('o_level_1')->nullable();
            $table->text('o_level_2')->nullable();
            $table->text('jamb_result')->nullable();
            $table->text('fslc')->nullable();
            $table->text('others')->nullable();
            $table->text('passport')->nullable();



            $table->string('payment_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_forms');
    }
};
