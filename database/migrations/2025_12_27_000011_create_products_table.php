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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_brand_id');
            $table->text('title');
            $table->text('slug');
            $table->text('thumb_img')->nullable();
            $table->float('regular_price', 10, 2)->default(0);
            $table->decimal('price', 10, 2)->default(0);
            $table->float('sale_price', 10, 2)->default(0);
            $table->text('sku')->unique();
            $table->tinyInteger('status');
            $table->unsignedBigInteger('herlan_product_id')->unique();
            $table->text('herlan_product_uri')->unique();
            $table->tinyInteger('affiliate_commission_rate')->default(0);
            $table->integer('total_clicked')->default(0);
            $table->integer('sold_count')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
