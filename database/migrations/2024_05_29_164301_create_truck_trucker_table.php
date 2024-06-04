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
        Schema::create('truck_trucker', function (Blueprint $table) {
            $table->id();

             //atributo foraneo 
             $table->unsignedBigInteger('trucker_id')->nullable();
             $table->unsignedBigInteger('truck_id')->nullable();

            //referencia truck_driver
            $table->foreign('trucker_id')
            ->references('id')
            ->on('truckers')->onDelete('set null');

            //referencia truck
            $table->foreign('truck_id')
            ->references('id')
            ->on('trucks')->onDelete('set null');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_trucker');
    }
};
