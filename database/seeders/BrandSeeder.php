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
        "logo" => "https://www.amprobe.com/wp-content/uploads/2022/02/Amprobe_A_Fluke_Brand.png",],
        ["brand_name" => "Andeen-Hagerling",
        "logo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRBQo0KbUMJeXlo8trwCIyQWEPSfqhrfB1XM33BGPm5w&s",],
        ["brand_name" => "AOK",
        "logo" => "https://gewebenetzwerk.de/wp-content/uploads/2022/05/AOK-Logo-Vertikal-gruen.png",],
        ["brand_name" => "Battery-Metric(Lamantia)",
        "logo" => "https://www.batterymetric.com/wp-content/uploads/SBannerTop2c.png",],
        ["brand_name" => "BC-Biomedical",
        "logo" => "https://www.bcgroupintl.com/images/BC_BIOMEDICAL_Logo.png",],
        ["brand_name" => "Bird",
        "logo" => "https://upload.wikimedia.org/wikipedia/commons/4/4e/Birdrf-Logo2.jpg",],
        ["brand_name" => "BK-Precision/Sefram",
        "logo" => "https://ce8dc832c.cloudimg.io/cdn/n/n@bb2877491c3d9e476c0e9071267213057178daf0/_cs_/2020/11/5fb797e827ca7/b_k_precision_1200.png",],
        ["brand_name" => "Bruel&Kjaer",
        "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Bruel%26Kjaer_Logo.jpg/1200px-Bruel%26Kjaer_Logo.jpg",]
        ];

        collect($brands)->each(function ($brand) {
            Brand::create($brand);
        });
    }
}