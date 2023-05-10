<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasta;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pastas = config("pasta");

        foreach($pastas as $pasta) {

            $newPasta = new Pasta();

            $newPasta->src = $pasta["src"];
            $newPasta->titolo = $pasta["titolo"];
            $newPasta->tipo = $pasta["tipo"];
            $newPasta->cottura = $pasta["cottura"];
            $newPasta->peso = $pasta["peso"];
            $newPasta->descrizione = $pasta["descrizione"];
            $newPasta->save();
        }
    }
}
