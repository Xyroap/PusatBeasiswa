<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('applications', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->foreignId('scholarship_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->decimal('gpa', 3, 2);

        $table->string('major');

        $table->string('education_level');

        $table->integer('toefl_score')->nullable();

        $table->text('organization_experience')->nullable();

        $table->string('cv')->nullable();

        $table->enum('status', [
            'Pending',
            'Approved',
            'Rejected'
        ])->default('Pending');

        $table->timestamps();
    });
}
};
