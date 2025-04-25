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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("primer_nombre", length:50);
            $table->string("segundo_nombre", length:50);
            $table->string("primer_apellido", length:50);
            $table->string("segundo_apellido", length:50);
            $table->string("documento", length:10)->unique();
            $table->date("fecha_nacimiento");
            $table->foreignId("id_tipo_documento")->constrained("tipo_documentos")->ondelete();
            $table->foreignId("id_sexo")->constrained("sexos")->ondelete();
            $table->foreignId("id_sanguineo")->constrained("tipo_sangres")->ondelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
