<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quiz;
use App\Models\QA;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Clarence',
            'last_name' => 'Coronel',
            'username' => 'cc101701',
            'password' => 'testing'
        ]);
        
        Quiz::factory()->create([
            'title' => fake()->sentence(),
            'user_id' => 1,
        ]);

        QA::factory(10)->create([
            'quiz_id' => 1,
            'question' => fake()->sentence(),
            'answer' => fake()->sentence()
        ]);
    }
}
