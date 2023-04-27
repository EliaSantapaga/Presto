<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Metroidvania', 'Avventura', 'Gioco di Ruolo (RPG)', 'Sparatutto (FPS)', 'Rompicapo', 'Azione', 'Simulazione', 'Sport', 'Picchiaduro', 'Indie', 'Sandbox'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        User::factory()->create([
            'name' => 'Elia Santapaga',
            'email' => 'elia.santapaga@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => true,
            'is_revisor' => true,
            'is_writer' => true,

        ]);

        User::factory()->create([
            'name' => 'Test Revisor',
            'email' => 'testrevisor@example.com',
            'password' => Hash::make('12345678'),
            'is_revisor' => true,

        ]);

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'testadmin@example.com',
            'password' => Hash::make('12345678'),
            'is_admin' => true,

        ]);

        User::factory()->create([
            'name' => 'Test Writer',
            'email' => 'testwriter@example.com',
            'password' => Hash::make('12345678'),
            'is_writer' => true,

        ]);
    }
}
