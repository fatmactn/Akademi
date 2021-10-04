<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'phone' => '555-555-55-55',
            'mail' => 'asd.asd.com',
            'address' => 'Turkey',
            'mapUrl' => 'https://goo.gl/maps/b3kuywMsdhcm9Usp8',
        ]);
    }
}
