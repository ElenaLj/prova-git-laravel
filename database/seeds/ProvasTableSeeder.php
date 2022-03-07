<?php

use Illuminate\Database\Seeder;
use App\Prova;

class ProvasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 0; $i < 10; $i++) {
            $newProva = new Prova();
            $newProva->name = "Prova di Elena";
            $newProva->save();
        }
    }
}
