<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(38)
            ->hasPurchases(8)
            ->create();

        User::factory()
            ->count(40)
            ->hasPurchases(5)
            ->create();
        
        User::factory()
            ->count(25)
            ->hasPurchases(15)
            ->create();
        
        User::factory()
            ->count(15)
            ->hasPurchases(4)
            ->create();

        
        $countThisWeekBirthday = rand(4,10);
        $users = [];
        for($i=0 ; $i<$countThisWeekBirthday; $i++){
            $users[] = [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' =>  Hash::make('password'),
                'remember_token' => Str::random(10),
                'birthdate' => now()->addDays(rand(0,6))->subYears(rand(18,29)),
                'updated_at' => now(),
                'created_at' => now()
            ];
        }
        User::insert($users);
    }
}
