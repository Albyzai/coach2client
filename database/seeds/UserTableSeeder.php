<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
        
        $customer = new User();
        $customer->name = 'Karsten Sørensen';
        $customer->email = 'customer@example.com';
        $customer->password = bcrypt('Snuden123');
        $customer->save();
        $customer->roles()->attach($role_customer);
        
        $trainer = new User();
        $trainer->name = 'Chris McDonald';
        $trainer->email = 'trainer@example.com';
        $trainer->password = bcrypt('Snuden123');
        $trainer->save();
        $trainer->roles()->attach($role_trainer);
        
        $admin = new User();
        $admin->name = 'Jonas Mohr Pedersen';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('Snuden123');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
