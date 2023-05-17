<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\division;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        division::create([
            'nama_divisi'=>'VP Finance',
        ]);

        division::create([
            'nama_divisi'=>'VP CSP & BD',
        ]);

        division::create([
            'nama_divisi'=>'VP Production',
        ]);

        division::create([
            'nama_divisi'=>'VP Technical & Service',
        ]);

        division::create([
            'nama_divisi'=>'Corporate Secretary',
        ]);

        division::create([
            'nama_divisi'=>'HR Development',
        ]);
    }
}
