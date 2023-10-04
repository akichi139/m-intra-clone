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
        "logo" => "test",],
        ["brand_name" => "BC-Biomedical",
        "logo" => "test",],
        ["brand_name" => "Bird",
        "logo" => "test",],
        ["brand_name" => "BK-Precision/Sefram",
        "logo" => "test",],
        ["brand_name" => "Bruel&Kjaer",
        "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Bruel%26Kjaer_Logo.jpg/1200px-Bruel%26Kjaer_Logo.jpg",]
        ];

        collect($brands)->each(function ($brand) {
            Brand::create($brand);
        });
    }
}