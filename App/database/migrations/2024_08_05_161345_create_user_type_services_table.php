<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateUserTypeServicesTable  extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_type_services', function (Blueprint $table) {
            $table->id();
            $table->decimal('pricefinal', 10, 2);
            $table->date('date');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('type_service_id')->constrained('type_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type_services');
    }
};
