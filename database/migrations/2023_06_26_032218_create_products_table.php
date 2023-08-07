<?php

use App\Models\Company;
use App\Models\ProductCategory;
use App\Models\Stock;
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
            $table->string('name');
            $table->string('code');
            $table->foreignIdFor(ProductCategory::class,'category_id');
            $table->foreignIdFor(Stock::class,'stock_id');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_using_stock')->default(true);
            $table->string('description')->nullable();
            $table->integer('price');

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
