<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDermatologistPharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dermatologist_pharmacy', function (Blueprint $table) {
            $table->foreignId('pharmacy_id')->constrained();
            $table->foreignId('dermatologist_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dermatologist_pharmacy');
    }
}
