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
        Schema::table('giveaway_product_requirements', function (
            Blueprint $table
        ) {
            $table
                ->foreign('requested_user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('requested_product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('admin_viewer_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('approver_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('giveaway_product_requirements', function (
            Blueprint $table
        ) {
            $table->dropForeign(['requested_user_id']);
            $table->dropForeign(['requested_product_id']);
            $table->dropForeign(['admin_viewer_id']);
            $table->dropForeign(['approver_id']);
        });
    }
};
