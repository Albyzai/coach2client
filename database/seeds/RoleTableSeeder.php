<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Role();
        $customer->name = 'customer';
        $customer->description = 'A regular customer';
        $customer->save();
        
        $trainer = new Role();
        $trainer->name = 'trainer';
        $trainer->description = 'A trainer';
        $trainer->save();
        
        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = 'The administrator';
        $admin->save();
    }
}
