<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->unsignedInteger('quantity')->default(0);
            $table->unsignedInteger('sold')->default(0); // Thêm cột sold kiểu integer
            $table->unsignedBigInteger('category_id')->nullable(); // Thêm cột category_id
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // Thêm khóa ngoại
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
