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
        Schema::create('affiliate_badges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('img')->nullable();
            $table
                ->enum('user_type', ['influencer', 'agent'])
                ->default('influencer');
            $table->integer('min_requirement')->default(0);
            $table->tinyInteger('order')->default(0);
            $table
                ->enum('reward_type', ['fixed', 'percentage'])
                ->default('fixed');
            $table->float('reward_amount', 10, 2)->default(0);
            $table->tinyInteger('status')->default(1);
            $table->text('description')->nullable();
            $table->tinyInteger('has_consistency_rule')->default(0);
            $table->integer('consistency_value')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_badges');
    }
};
