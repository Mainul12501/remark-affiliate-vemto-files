<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('affiliate_commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->enum('payment_type', ['fixed', 'percentage'])
                ->default('fixed');
            $table
                ->enum('commission_type', ['tin', 'commission_on_influencer'])
                ->default('tin');
            $table->float('amount');
            $table->string('title');
            $table->text('note');
            $table->tinyInteger('status');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_commissions');
    }
};
