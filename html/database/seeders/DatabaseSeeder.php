<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Contact::factory(20)->create();

        Contact::factory()->create([
            'name' => 'Test Contact',
            'contact' => '123456789',
            'email' => 'test_contact@example.com',
        ]);
    }
}