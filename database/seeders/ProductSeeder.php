<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ["product_id" => "Amprobe LM-200 LED",
            "product_name" => "เครื่องวัดความสว่างแสงที่รองรับโคม LED",
            "image" => "p1.png",
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 7654.00,
            "status" => "new",
            "datasheet" => "d1.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ULD-400-T",
            "product_name" => "Ultrasonic Probe สำหรับตรวจการรั่ว",
            "image" => "p2.png",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 21618.00,
            "status" => "new",
            "datasheet" => "d2.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ULD-400-R",
            "product_name" => "Ultrasonic Probe สำหรับตรวจการรั่ว",
            "image" => "p3.png",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 32853.00,
            "status" => "new",
            "datasheet" => "d3.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe TH-1",
            "product_name" => "มิเตอร์วัดความชื้นสัมพัทธ์และอุณหภูมิอากาศขนาดพกพา",
            "image" => "p4.png",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 4519.00,
            "status" => "new",
            "datasheet" => "d4.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe PRM-6",
            "product_name" => "เครื่องตรวจสอบลำดับเฟสและทิศทางหมุนของมอเตอร์ 3 เฟส",
            "image" => "p5.png",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 8794.00,
            "status" => "new",
            "datasheet" => "d5.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe SOLAR-100",
            "product_name" => "มิเตอร์วัดกําลังงานแสง",
            "image" => "p6.png",
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 8794.00,
            "status" => "new",
            "datasheet" => "d6.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ACD-10 PLUS",
            "product_name" => "แคลมป์มิเตอร์ขนาด 600A",
            "image" => "p7.png",
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 4601.00,
            "status" => "new",
            "datasheet" => "d7.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe BAT-500",
            "product_name" => "เครื่องทดสอบความจุแบตเตอรี่",
            "image" => "p8.png",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 56180.00,
            "status" => "new",
            "datasheet" => "d8.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe TMA10A",
            "product_name" => "เครื่องวัดลมพร้อมด้ามบิดงอได้",
            "image" => "p9.png",
            "category_id" => 10,
            "brand_id" => 1,
            "price" => 14412.00,
            "status" => "new",
            "datasheet" => "d9.pdf",
            "supervise" => "test1",
            "guarantee" => 1,],
        ];

        collect($products)->each(function ($product) {
            Product::create($product);
        });
    }
}
