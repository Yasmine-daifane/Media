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
        Schema::table('recharge_balances', function (Blueprint $table) {
            $table->string('payment_method')->after('price'); // Add payment method column
            $table->string('payment_receipt')->nullable()->after('payment_method'); // Add payment receipt column
            $table->text('comment')->nullable()->after('payment_receipt'); // Add comment column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recharge_balances', function (Blueprint $table) {
            $table->dropColumn(['payment_method', 'payment_receipt', 'comment']);
        });
    }
};
