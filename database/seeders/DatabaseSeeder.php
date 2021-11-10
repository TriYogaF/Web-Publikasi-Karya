<?php

namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\ArtworkCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tri Yoga Febriansyah',
            'username' => 'Yoga',
            'email' => 'tri@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();
        ArtworkCategory::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);
        ArtworkCategory::create([
            'name' => 'Drawing',
            'slug' => 'drawing'
        ]);
        ArtworkCategory::create([
            'name' => 'Building',
            'slug' => 'building'
        ]);
        Artwork::factory(16)->create();
    }
}
