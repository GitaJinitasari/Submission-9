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
        Schema::create('dosens', function (Blueprint $table) {
        $table->id();
        $table->string('nip')->unique();
        $table->string('nama');
        $table->string('MataKuliah');
        // Tambahkan kolom-kolom lain yang diperlukan
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('_dosen');
    }
};
