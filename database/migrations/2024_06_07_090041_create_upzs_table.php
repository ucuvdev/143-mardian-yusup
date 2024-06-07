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
        Schema::create('upz', function (Blueprint $table) {
            $table->id();
            $table->string('nm_upz');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('ketua');
            $table->string('kekretaris');
            $table->string('bendahara');
            $table->string('nilai_konversi_zf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upz');
    }
};
