<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pencatatan_kalkulasis', function (Blueprint $table) {
            $table->id();
            $table->decimal('harga_sawit', 15, 2);
            $table->decimal('hasil_panen', 15, 2);
            $table->date('tanggal_panen');
            $table->decimal('pengeluaran_panen', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pencatatan_kalkulasis');
    }
};
