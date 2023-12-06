<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'firstName' => 'Ro\'zimuhammad',
            'lastName' => 'Ibrohimjonov',
            'email' => 'ibrokhimovrozimuhammad@gmail.com',
            'phone' => '+998903022003',
            'password' => Hash::make('rozimuhammad123')

        ]);
        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
