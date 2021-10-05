<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactForm::create([
            'name' => 'Servislet',
            'mail' => 'asdf@servislet.com',
            'subject' => 'asdsdsdsd',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum'
        ]);
    }
}
