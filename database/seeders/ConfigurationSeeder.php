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
            'name' => 'Vertical',
            'text' => '',
            'link' => '',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'Horizontal',
            'text' => '',
            'link' => '',
            'resources' => 'image'
        ]);
        Configuration::create([
            'name' => 'Horizontal',
            'text' => '',
            'link' => '',
            'resources' => 'image'
        ]);
    }
}
