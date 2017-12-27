<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Gym;
use App\Tag;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = Role::where('name', 'customer')->first();
        $role_trainer = Role::where('name', 'trainer')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $gym_fw = Gym::where('name', 'fitnessworld')->first();
        $gym_fdk = Gym::where('name', 'fitnessdk')->first();
        $gym_fresh = Gym::where('name', 'freshfitness')->first();
        $gym_cfc = Gym::where('name', 'cfc')->first();
        $gym_urban = Gym::where('name', 'urbangym')->first();

        $tag_HIIT = Tag::where('keyword', 'HIIT')->first();
        $tag_cf = Tag::where('keyword', 'Crossfit')->first();
        $tag_yoga = Tag::where('keyword', 'Yoga')->first();
        $tag_wl = Tag::where('keyword', 'Vægttab')->first();

        $customer = new User();
        $customer->name = 'Karsten Sørensen';
        $customer->email = 'customer@example.com';
        $customer->password = bcrypt('Snuden123');
        $customer->save();
        $customer->roles()->attach($role_customer);
        $customer->gyms()->attach($gym_fresh);
        $customer->gyms()->attach($gym_cfc);
        $customer->gyms()->attach($gym_fw);

        $trainer = new User();
        $trainer->name = 'Chris McDonald';
        $trainer->email = 'trainer@example.com';
        $trainer->password = bcrypt('Snuden123');
        $trainer->experience = 'Mellem';
        $trainer->address = 'Niels Bohrs Alle 23, -3152';
        $trainer->zipcode = 2200;
        $trainer->about = 'Chris MacDonald er en amerikansk foredragsholder og klummeskribent, der har boet i Danmark siden 1999. Han afholder foredrag og workshops om sund livsstil, motivation, personlig udvikling, lederskab, coaching og teambuilding over hele landet.';
        $trainer->education = 'Chris MacDonald er født 10. januar 1973 i Minnesota, USA, og størstedelen af hans opvækst fandt sted i Seattle. I dag bor han i København og har boet i Danmark i et mere end et årti.

Han er uddannet Cand. Scient i Human Fysiologi ved Københavns Universitet og er grundlægger af koncepterne: Sundhed i Balance og Strong Body Strong Mind.';
        $trainer->save();
        $trainer->roles()->attach($role_trainer);
        $trainer->gyms()->attach($gym_fw);
        $trainer->gyms()->attach($gym_urban);
        $trainer->gyms()->attach($gym_fdk);
        $trainer->tags()->attach($tag_HIIT);
        $trainer->tags()->attach($tag_cf);
        $trainer->tags()->attach($tag_yoga);
        $trainer->tags()->attach($tag_wl);

        $admin = new User();
        $admin->name = 'Jonas Mohr Pedersen';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('Snuden123');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
