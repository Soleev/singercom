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
        Schema::create('subcategory', function (Blueprint $table) {
            $table->id(); // Автоматическое поле 'id'
            $table->string('tittle'); // Поле 'tittle'
            $table->string('link'); // Поле 'link'
            $table->unsignedTinyInteger('parent'); // Поле 'parent', ссылается на id родительской категории
            $table->timestamps(); // Поля 'created_at' и 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategory');
    }
};
