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
        Schema::create('giveaway_product_requirements', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('requested_user_id');
            $table->unsignedBigInteger('requested_product_id');
            $table->tinyInteger('request_qty')->default(0);
            $table->tinyInteger('approved_qty')->default(0);
            $table->tinyInteger('is_reviewed_by_partner')->default(0);
            $table->string('product_delivery_date')->nullable();
            $table->string('product_ack_date')->nullable();
            $table->string('slug');
            $table->string('status')->default('1');
            $table->tinyInteger('product_ack_status')->default(0);
            $table->unsignedBigInteger('admin_viewer_id')->nullable();
            $table->unsignedBigInteger('approver_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giveaway_product_requirements');
    }
};
