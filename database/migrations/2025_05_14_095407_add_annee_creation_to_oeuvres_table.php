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
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->year('annee_creation')->after('artiste');
        });
    }

    public function down(): void
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->dropColumn('annee_creation');
        });
    }
};
