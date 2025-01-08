<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->id();
            $table->string("MaKH");
            $table->string("HoTen");
            $table->date("NgaySinh");
            $table->string("GioiTinh");
            $table->string("BienSo");
            $table->string("LoaiXe");
            $table->string("SDT");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khachhangs');
    }
};
