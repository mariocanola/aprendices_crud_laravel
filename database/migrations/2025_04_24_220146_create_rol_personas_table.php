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
        Schema::create('rol_personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_persona")->constrained("personas")->ondelete();
            $table->foreignId("id_rol")->constrained("rols")->ondelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_personas');
    }
};
