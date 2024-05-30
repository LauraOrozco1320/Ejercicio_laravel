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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('addressee');
            $table->string('address');

            //atributo foraneo 
            $table->unsignedBigInteger('truck_driver_id')->nullable();
            
            //referencia truck_driver
            $table->foreign('truck_driver_id')
            ->references('id')
            ->on('truck_drivers')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
