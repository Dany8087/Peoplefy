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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('Blog_Title');
            $table->string('Blog_Created_by');
            $table->string('Blog_Type');
            $table->string('Blog_Images_Author_Photo');
            $table->string('Blog_Details')->nullable();
            $table->string('Blog_Facebook')->nullable();
            $table->string('Blog_Twitter')->nullable();
            $table->string('Blog_Instagram')->nullable();
            $table->string('Blog_Linkedin')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
