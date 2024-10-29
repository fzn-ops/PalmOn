<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToGuidesTable extends Migration
{
    public function up()
    {
        Schema::table('simulasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kebun')->nullable();
            $table->string('lokasi')->nullable();
            $table->integer('luas_kebun')->nullable();
            $table->integer('jumlah_pohon')->nullable();
            $table->string('jenis_bibit')->nullable();
            $table->string('jenis_tanah')->nullable();
            
        });
    }

    public function down()
    {
        Schema::table('guides', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'published_at']);
        });
    }
}
;
