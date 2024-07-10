<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Faker
use Faker\Generator as Faker;

//Model
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        // $table->string('azienda', 100);
        // $table->string('stazione_partenza', 100);
        // $table->string('stazione_arrivo', 100);
        // $table->date('partenza_data');
        // $table->time('partenza_orario');
        // $table->date('arrivo_data');
        // $table->time('arrivo_orario');
        // $table->integer('codice_treno')->unique()->unsigned()->after('id');
        // $table->integer('numero_carrozze')->unsigned();
        // $table->boolean('is_in_orario')->default(true);
        // $table->boolean('is_cancellato')->default(false);
        for ($i = 0; $i < 50; $i++){
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->partenza_data = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->partenza_orario = $faker->time();
            $train->arrivo_data = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrivo_orario = $faker->time();
            $train->codice_treno = $faker->numerify('#####');
            $train->numero_carrozze = $faker->numberBetween(2, 20);
            $train->is_in_orario = $faker->boolean();
            $train->is_cancellato = $faker->boolean();

            $train->save();
        }
    }
}
