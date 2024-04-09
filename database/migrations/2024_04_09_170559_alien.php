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
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('raca');
        $table->string('habilidade');
        $table->string('serie');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
