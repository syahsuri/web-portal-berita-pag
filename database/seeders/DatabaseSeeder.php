<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\division;
use App\Models\headnewspage;
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

        Division::create([
            'nama_divisi' => 'VP Finance'
        ]);

        Division::create([
            'nama_divisi' => 'VP CSP & BD'
        ]);

        Division::create([
            'nama_divisi' => 'VP Production'
        ]);

        Division::create([
            'nama_divisi' => 'VP Technical & Service'
        ]);

        Division::create([
            'nama_divisi' => 'Corporate Secretary'
        ]);

        Division::create([
            'nama_divisi' => 'HR Development'
        ]);

        headnewspage::create([
            'position' => 'Tengah'
        ]);

        headnewspage::create([
            'position' => 'Kanan Atas'
        ]);

        headnewspage::create([
            'position' => 'Kanan Bawah'
        ]);

        headnewspage::create([
            'position' => 'Kiri Atas'
        ]);

        headnewspage::create([
            'position' => 'Kiri Bawah'
        ]);
    }
}
