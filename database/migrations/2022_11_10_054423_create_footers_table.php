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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('number')->nullable();
            $table->text('shortTitle')->nullable();
            $table->text('address')->nullable();
            $table->text('address_details')->nullable();
            $table->text('email')->nullable();
            $table->text('socially')->nullable();
            $table->text('fb')->nullable();
            $table->text('twitter')->nullable();
            $table->text('behance')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
