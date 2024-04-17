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
        Schema::create('scores', function(Blueprint $table){
            $table->index('uid');
            $table->foreignId('uid')->references('id')->on('users');
            $table->integer('introduction')->default(0);
            $table->integer('syntax')->default(0);
            $table->integer('variables')->default(0);
            $table->integer('operators')->default(0);
            $table->integer('conditionals')->default(0);
            $table->integer('loops')->default(0);
            $table->integer('functions')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
