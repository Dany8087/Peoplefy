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
        Schema::create('case__studies', function (Blueprint $table) {
            $table->id();
            $table->string('Casestudy_Title');
            $table->string('Casestudy_Created_by');
            $table->string('Casestudy_Type');
            $table->string('Casestudy_Images_Author_Photo');
            $table->string('Casestudy_Details')->nullable();
            $table->string('Casestudy_Facebook')->nullable();
            $table->string('Casestudy_Twitter')->nullable();
            $table->string('Casestudy_Instagram')->nullable();
            $table->string('Casestudy_Linkedin')->nullable();
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
        Schema::dropIfExists('case__studies');
    }
};
