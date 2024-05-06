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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('reg');
            $table->string('fulname');
            $table->string('seater');
            $table->string('Roomno');
            $table->string('email');
            $table->string('date');
            $table->string('number');
            $table->string('gnumber');
            $table->string('addrss');
            $table->string('gaddrss');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
