<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Title',100);
            $table->string('description')->nullable();
            $table->integer('Page_Count');
            $table->string('Author_Name',80);
            $table->string('Author_Email',50);
            $table->date('Published_Date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('library_table');
    }
};
