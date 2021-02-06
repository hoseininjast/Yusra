<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('WorkID');
            $table->foreign('WorkID')->references('id')->on('works');
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('id')->on('users');
            $table->unsignedBigInteger('RoleID');
            $table->foreign('RoleID')->references('id')->on('roles');
            $table->text('Description');
            $table->enum('Status' , ['Finished' , 'Working'])->default('Working');
            $table->date('StartDate');
            $table->integer('WorkDays')->nullable();
            $table->date('FinishDate')->nullable();
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
        Schema::dropIfExists('parts');
    }
}
