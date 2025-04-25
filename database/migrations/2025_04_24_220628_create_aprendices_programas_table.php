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
        Schema::create('aprendices_programas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_aprendiz")->constrained("aprendices")->ondelete();
            $table->foreignId("id_programa")->constrained("programas")->ondelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices_programas');
    }
};
