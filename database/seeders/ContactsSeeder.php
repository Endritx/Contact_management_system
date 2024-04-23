<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Mevaip',
            'surname' => 'Zeqiri',
            'phone' => '123-567-890',
        ]);

        Contact::create([
            'name' => 'Adem',
            'surname' => 'Shahini',
            'phone' => '987-654-321',
        ]);

        Contact::create([
            'name' => 'Ardi',
            'surname' => 'Shabani',
            'phone' => '555-555-555',
        ]);

        Contact::create([
            'name' => 'Flori',
            'surname' => 'Asani',
            'phone' => '666-666-666',
        ]);

        Contact::create([
            'name' => 'Endrit',
            'surname' => 'Mamuti',
            'phone' => '777-777-777',
        ]);
    
    }
}
