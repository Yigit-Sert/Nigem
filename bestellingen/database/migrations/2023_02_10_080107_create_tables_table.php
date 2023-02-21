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
        Schema::create('table_information', function (Blueprint $table) {
            $table->id();
            $table->string('productnaam');
            $table->integer('verkocht');
            $table->integer('populariteit');
            $table->integer('omzet');
            $table->integer('percentageTotaal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
};
