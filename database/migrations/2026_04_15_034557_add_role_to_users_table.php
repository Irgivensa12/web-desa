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
        Schema::table('users', function (Blueprint $table) { // Menambahkan kolom 'role', 'nik'ke tabel 'users'
            $table->string('role')->default('warga');
            $table->string('nik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) { // Menghapus kolom 'role', 'nik' dari tabel 'users'
            $table->dropColumn(['role', 'nik']);
        });
    }
};
