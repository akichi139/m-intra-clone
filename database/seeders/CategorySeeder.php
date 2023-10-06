<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $root_category1 = Category::create([
            'categories_name' => 'Industrial measuring and testing tools',
            'is_root_category' => true
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Measure accessory',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Pipe inspection camera',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Thermal imaging camera',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Sound camera',
            'is_root_category' => false
        ]);
        
        $root_category1->children()->create([
            'categories_name' => 'Partial discharge',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'System leak detector',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Electrical power meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Tachometer',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Anemometer',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Low resistance meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Electrical insulation tester',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Air quality meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Dust measuring device',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Laser measuring device',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Phase sequence meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Magnetic field meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Light meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Flow meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Clamp meter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Non contact voltage tester',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Digital multimeter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Analog multimeter',
            'is_root_category' => false
        ]);

        $root_category1->children()->create([
            'categories_name' => 'Oscilloscope',
            'is_root_category' => false
        ]);
    }
}
