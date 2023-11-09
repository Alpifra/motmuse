<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Round;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Round::factory(30)
            ->has(User::factory()->count(5), 'participants')
            ->create();

        User::factory()->create([
            'first_name' => 'Alexandre',
            'last_name'  => 'Chauvin',
            'email'      => 'admin@email.com',
            'password'   => Hash::make('password'),
        ]);
    }
}
