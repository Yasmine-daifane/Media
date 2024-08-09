<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypeServicesTable extends Migration
{
    public function up()
    {
        Schema::create('user_type_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_service_id')->constrained()->onDelete('cascade');
            $table->decimal('pricefinal', 10, 2); // Adjust precision as needed
            $table->timestamp('date');
            $table->timestamp('expiration_date')->nullable(); // Allow null values
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_type_services');
    }
}