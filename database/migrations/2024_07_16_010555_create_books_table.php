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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150); // Tiêu đề
            $table->string('thumbnail', 255); //Ảnh mô tả
            $table->string('author', 255); // Tác giả 
            $table->string('publisher', 255); //Nhà xuất bản
            $table->date('publication'); //Ngày xuất bản
            $table->double('price'); // Giá
            $table->integer('quantity'); // Số lượng
            $table->foreignId('category_id')->constrained(); // Mã danh mục
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
