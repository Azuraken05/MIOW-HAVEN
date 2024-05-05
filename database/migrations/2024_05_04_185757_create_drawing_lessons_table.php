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
        Schema::create('drawing_lessons', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->bigInteger("user_id");
            $table->double("price")->default(5.00);
            $table->longText("description")->nullable();
            $table->string("type")->default("module");
            $table->integer("views")->default(0);
            $table->string("status")->default("pending");
            $table->longText("path");
            $table->integer("buyers")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drawing_lessons');
    }
};
