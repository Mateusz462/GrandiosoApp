<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MattDaneshvar\Survey\Models\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = Survey::create([
            'name' => 'Cat Population Survey',
            'descrioption' => 'descrioption',
            'password' => 'descrioption',
            'status' => '1',
            'user_id' => '1',
        ]);

        $survey->questions()->create([
             'content' => 'How many cats do you have?',
             'type' => 'number',
             'rules' => ['numeric', 'min:0']
         ]);

        $survey->questions()->create([
            'content' => 'What\'s the name of your first cat',
        ]);

        $survey->questions()->create([
            'content' => 'Would you want a new cat?',
            'type' => 'radio',
            'options' => ['Yes', 'Oui']
        ]);
    }
}
