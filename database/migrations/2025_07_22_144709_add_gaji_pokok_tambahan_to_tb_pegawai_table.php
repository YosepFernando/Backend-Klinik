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
        Schema::table('tb_pegawai', function (Blueprint $table) {
            $table->decimal('gaji_pokok_tambahan', 15, 2)->nullable()->default(0)->after('tanggal_keluar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pegawai', function (Blueprint $table) {
            $table->dropColumn('gaji_pokok_tambahan');
        });
    }
};
