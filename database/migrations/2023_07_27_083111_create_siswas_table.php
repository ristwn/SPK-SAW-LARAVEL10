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
        Schema::create('siswas', function (Blueprint $table) {
            $table->integer('nisn')->primary();
            $table->string('nama', 50);
            $table->string('tempat', 50);
            $table->date('lahir');
            $table->enum('jeniskelamin', ['Laki-laki', 'perempuan']);
            $table->string('kelas', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};