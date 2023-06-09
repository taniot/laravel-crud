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
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();

            $table->string('src')->nullable();
            $table->string('titolo', 50);
            $table->string('tipo', 10);
            $table->unsignedTinyInteger('cottura');
            $table->unsignedSmallInteger('peso');
            $table->text('descrizione');

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
        Schema::dropIfExists('pastas');
    }
};
