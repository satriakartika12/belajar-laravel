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
        Schema::create('student_ekstrakulikuler', function (Blueprint $table) {
            $table->unsignedbiginteger('student_id');
            $table->foreign('student_id')->references('id')->on ('students')->ondelete('restrict');
            $table->unsignedbiginteger('ekstrakulikuler_id');
            $table->foreign('ekstrakulikuler_id')->references('id')->on ('ekstrakulikulers')->ondelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_ekstrakulikuler');
    }
};
