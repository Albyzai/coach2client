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
        $fitnessworld->thumbnail = 'media/fitnessworld.png';
        $fitnessworld->save();

        $fitnessdk = new Gym();
        $fitnessdk->name = 'fitnessdk';
        $fitnessdk->thumbnail = 'media/fitnessdk.png';
        $fitnessdk->save();

        $freshfitness = new Gym();
        $freshfitness->name = 'freshfitness';
        $freshfitness->thumbnail = 'media/freshfitness.png';
        $freshfitness->save();

        $cfc = new Gym();
        $cfc->name = 'cfc';
        $cfc->thumbnail = 'media/thumbnail.png';
        $cfc->save();

        $urbangym = new Gym();
        $urbangym->name = 'urbangym';
        $urbangym->thumbnail = 'media/urbangym.png';
        $urbangym->save();

    }
}
