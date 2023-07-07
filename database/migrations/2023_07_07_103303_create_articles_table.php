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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('incomes', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->constrained();
          $table->foreignId('type_id')->constrained();
          $table->integer('amount');
          $table->date('date');
          $table->string('note')->nullable();
          $table->timestamps();
      });
  
      Schema::create('spendings', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->constrained();
          $table->foreignId('type_id')->constrained();
          $table->integer('amount');
          $table->date('date');
          $table->string('note')->nullable();
          $table->timestamps();
      });
  
      Schema::create('types', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('category');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
