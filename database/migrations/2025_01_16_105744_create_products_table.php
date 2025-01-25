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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade');
            $table->string('code')->unique();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('unit_measurement');
            $table->decimal('price', 15, 2);
            $table->decimal('sales_price', 15, 2);
            $table->integer('stock_qty');
            $table->integer('threshold');
            $table->boolean('status')->default(true);
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
