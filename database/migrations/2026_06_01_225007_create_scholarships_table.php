<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('scholarships', function (Blueprint $table) {
        $table->id();

        $table->string('title');
        $table->string('provider');

        $table->text('description');

        $table->string('image');

        $table->date('deadline');

        $table->timestamps();
    });
}
};
