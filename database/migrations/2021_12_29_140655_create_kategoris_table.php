<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->string('slug');
            $table->string('deskripsi');
            $table->unsignedBigInteger('dibuat_oleh');
            $table->unsignedBigInteger('diupdate_oleh');
            $table->unsignedBigInteger('dihapus_oleh');
            $table->timestamps();

            $table->foreign('dibuat_oleh')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('diupdate_oleh')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('dihapus_oleh')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
}
