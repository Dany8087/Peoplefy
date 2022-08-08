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
            $table->string('Title');
            $table->string('Created_by');
            $table->string('Images_Author_Photo')->default(1);
            $table->text('Details')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Linkedin')->nullable();
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
