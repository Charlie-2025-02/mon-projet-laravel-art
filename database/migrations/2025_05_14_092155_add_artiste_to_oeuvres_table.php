<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->string('artiste')->after('titre'); // Ajoute la colonne 'artiste' après 'titre'
        });
    }

    public function down()
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->dropColumn('artiste'); // Supprime la colonne 'artiste' si la migration est annulée
        });
    }
};
