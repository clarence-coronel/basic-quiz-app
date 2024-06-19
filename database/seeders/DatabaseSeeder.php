<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
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
        
        Quiz::factory(3)->create([
            'title' => fake()->sentence(),
            'about' => fake()->sentence(),
            'user_id' => 1,
        ]);

        // Question::factory(1)->create([
        //     'quiz_id' => 1,
        //     'content' => fake()->sentence(),
        //     'correct_choice_id' => null
        // ]);

        // Choice::factory()->create([
        //     'content' => fake()->sentence(),
        //     'question_id' => 1,
        // ]);
    }
}
