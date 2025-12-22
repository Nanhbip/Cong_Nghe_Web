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
    Schema::create('sinh_viens', function (Blueprint $table) {
        $table->id(); // khóa chính, tự tăng

        // Thêm cột theo yêu cầu
        $table->string('ten_sinh_vien', 255);
        $table->string('email', 255)->unique();

        $table->timestamps(); // created_at, updated_at
    });
}

};
