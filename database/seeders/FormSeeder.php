<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'nameSurname' => 'name surname',
            'mail' => 'mail@mail.com',
            'resumePath' => 'asd',
            'linkedinUrl' => 'fatmacetinn',
        ]);
        Form::create([
            'nameSurname' => 'name surname55',
            'mail' => 'mail@mail.com',
            'resumePath' => 'asd',
            'linkedinUrl' => 'ekrem-civan-869b27173',
        ]);
    }
}
