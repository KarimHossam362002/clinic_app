<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ContactUs;
use App\Models\Major;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Major::factory(App\User::class)->make();

        $this->call([
            MajorSeeder::class
        ]);
        $this->call([
            DoctorSeeder::class
        ]);
        $this->call([
            BookingSeeder::class
        ]);
        $this->call([
            ContactUsSeeder::class
        ]);
        $this->call([
            RateSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
