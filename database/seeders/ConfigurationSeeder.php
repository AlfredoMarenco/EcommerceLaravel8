<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'name' => 'Video',
            'resources' => 'video'
        ]);
        Configuration::create([
            'name' => 'Slider',
            'resources' => 'images'
        ]);
        Configuration::create([
            'name' => 'MenRight',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'MenLeft',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'Collection',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'WomenRight',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'WomenLeft',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'PublicRight',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'PublicLeft',
            'resources' => 'image'
        ]);
    }
}
