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
        Schema::table('users', function (Blueprint $table) {
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("discord")->nullable();
            $table->longText("avatar")->nullable();
            $table->string("type")->default("learner");
            $table->longText("bio")->nullable();
            $table->boolean("availability")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("facebook");
            $table->dropColumn("instagram");
            $table->dropColumn("discord");
            $table->dropColumn("avatar");
            $table->dropColumn("type");
            $table->dropColumn("bio");
            $table->dropColumn("availability");
        });
    }
};
