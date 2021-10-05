<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question' => 'question1',
            'answer' => 'answer1',
            'status' => 1
        ]);

        Question::create([
            'question' => 'question88',
            'answer' => 'answer88',
            'status' => 0
        ]);
    }
}
