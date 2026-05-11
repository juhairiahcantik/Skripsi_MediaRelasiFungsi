<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_kuis', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->text('pertanyaan'); // Teks pertanyaan
            $table->string('pilihan_a', 255); // Pilihan A
            $table->string('pilihan_b', 255); // Pilihan B
            $table->string('pilihan_c', 255); // Pilihan C
            $table->string('pilihan_d', 255); // Pilihan D
            $table->char('jawaban_benar', 1); // Jawaban yang benar (A, B, C, D)
            $table->timestamp('tanggal_dibuat')->useCurrent(); // Tanggal saat soal dibuat
            $table->timestamp('tanggal_diperbarui')->useCurrent()->nullable(); // Tanggal saat soal terakhir diperbarui
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal_kuis');
    }
}
