<?php

use Illuminate\Database\Seeder;
use App\Gym;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $fitnessworld = new Gym();
        $fitnessworld->name = 'fitnessworld';
        $fitnessworld->save();
        
        $fitnessdk = new Gym();
        $fitnessdk->name = 'fitnessdk';
        $fitnessdk->save();
        
        $freshfitness = new Gym();
        $freshfitness->name = 'freshfitness';
        $freshfitness->save();
        
        $cfc = new Gym();
        $cfc->name = 'cfc';
        $cfc->save();
        
        $urbangym = new Gym();
        $urbangym->name = 'urbangym';
        $urbangym->save();
        
    }
}
