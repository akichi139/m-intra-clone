<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [["brand_name" => "Amprobe",
        "logo" => "logo/Amprobe_A_Fluke_Brand.png",],
        ["brand_name" => "Andeen-Hagerling",
        "logo" => "logo/AH.png",],
        ["brand_name" => "AOK",
        "logo" => "logo/AOK.png",],
        ["brand_name" => "Battery-Metric(Lamantia)",
        "logo" => "logo/BM.png",],
        ["brand_name" => "BC-Biomedical",
        "logo" => "logo/BC_BIOMEDICAL_Logo.png",],
        ["brand_name" => "Bird",
        "logo" => "logo/bird-technologies-vector-logo.png",],
        ["brand_name" => "BK-Precision/Sefram",
        "logo" => "logo/normal_BK_Sefram_mixed_logo.jpg",],
        ["brand_name" => "Bruel&Kjaer",
        "logo" => "logo/Bruel&Kjaer_Logo.jpg",]
        ];

        collect($brands)->each(function ($brand) {
            Brand::create($brand);
        });
    }
}