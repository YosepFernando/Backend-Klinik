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
        Schema::table('tb_posisi', function (Blueprint $table) {
            $table->decimal('gaji_absensi', 15, 2)->default(0)->after('gaji_pokok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_posisi', function (Blueprint $table) {
            $table->dropColumn('gaji_absensi');
        });
    }
};
