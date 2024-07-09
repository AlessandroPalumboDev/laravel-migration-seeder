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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->date('partenza_data');
            $table->time('partenza_orario');
            $table->date('arrivo_data');
            $table->time('arrivo_orario');
            $table->integer('codice_treno')->unique()->unsigned()->after('id');
            $table->integer('numero_carrozze')->unsigned();
            $table->boolean('is_in_orario')->default(true);
            $table->boolean('is_cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_partenza');
            $table->dropColumn('stazione_arrivo');
            $table->dropColumn('partenza_data');
            $table->dropColumn('partenza_orario');
            $table->dropColumn('arrivo_data');
            $table->dropColumn('arrivo_orario');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('is_in_orario');
            $table->dropColumn('is_cancellato');
        });
    }
};
