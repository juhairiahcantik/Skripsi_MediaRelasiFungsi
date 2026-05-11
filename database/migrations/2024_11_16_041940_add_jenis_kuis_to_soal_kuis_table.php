<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('soal_kuis', function (Blueprint $table) {
            $table->string('jenis_kuis', 255)->after('pertanyaan')->nullable()->comment('Jenis kuis seperti Kuis 1, Kuis 2, Evaluasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('soal_kuis', function (Blueprint $table) {
            $table->dropColumn('jenis_kuis');
        });
    }
};
