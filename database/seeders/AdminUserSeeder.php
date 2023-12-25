<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ketan Pardhi',
            'email' => 'ketanpardhi7@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'Peter Parker',
            'email' => 'spiderman@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('123456789'),
        ]);

        $faker = Faker::create();

        for ($i = 1; $i < 10; $i++) {
            $admin = new User;
            $admin->name = $faker->name;
            $admin->email = $faker->email;
            $admin->role_id = $faker->randomElement([1, 2]); // Adjust the role_id as needed
            $admin->password = Hash::make($faker->password);
            $admin->save();
        }
    }
}
