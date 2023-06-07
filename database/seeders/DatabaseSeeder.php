<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        foreach(range(1,99) as $number) {
            Mahasiswa::create([
                'npm' => '21252500'. $number,
                'nama' => fake()->name(),
                'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => '2125250001.jpg',
                'prodi_id' => '993bef43-412c-47c2-b735-bc49557ba7d8'
            ]);
        }

        $this->call([
            FakultasSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
           FakultasSeeder::class 
        ]);
    }
}
