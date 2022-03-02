<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('category_id')->constrained()->onUpdate('cascade');
            $table->foreignId('manufacturer_id')->constrained()->onUpdate('cascade');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price', 20, 2)->default(0);
            $table->integer('units_in_stock')->default(0);
            $table->integer('low_stock_threshold')->nullable();
            $table->decimal('cash_discount_rate', 10, 2)->nullable();
            $table->decimal('card_discount_rate', 10, 2)->nullable();
            $table->boolean('discount_locked')->default(0);
            $table->timestamp('discount_assigned_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
