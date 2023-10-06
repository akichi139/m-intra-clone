<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

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
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 7654.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ULD-400-T",
            "product_name" => "Ultrasonic Probe สำหรับตรวจการรั่ว",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 21618.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ULD-400-R",
            "product_name" => "Ultrasonic Probe สำหรับตรวจการรั่ว",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 32853.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe TH-1",
            "product_name" => "มิเตอร์วัดความชื้นสัมพัทธ์และอุณหภูมิอากาศขนาดพกพา",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 4519.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe PRM-6",
            "product_name" => "เครื่องตรวจสอบลำดับเฟสและทิศทางหมุนของมอเตอร์ 3 เฟส",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 8794.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe SOLAR-100",
            "product_name" => "มิเตอร์วัดกําลังงานแสง",
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 8794.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe ACD-10 PLUS",
            "product_name" => "แคลมป์มิเตอร์ขนาด 600A",
            "category_id" => 18,
            "brand_id" => 1,
            "price" => 4601.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe BAT-500",
            "product_name" => "เครื่องทดสอบความจุแบตเตอรี่",
            "category_id" => 5,
            "brand_id" => 1,
            "price" => 56180.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
            ["product_id" => "Amprobe TMA10A",
            "product_name" => "เครื่องวัดลมพร้อมด้ามบิดงอได้",
            "category_id" => 10,
            "brand_id" => 1,
            "price" => 14412.00,
            "status" => "new",
            "supervise" => "test1",
            "guarantee" => 1,],
        ];

        collect($products)->each(function ($product) {
            $product_no_img = Product::create($product);
            $product_no_img->addMedia(UploadedFile::fake()->image('file1.png', 600, 600))->usingName($product_no_img->product_id)->toMediaCollection('productImages');
            $product_no_img->addMedia(UploadedFile::fake()->create('test.pdf'))->usingName($product_no_img->product_id)->toMediaCollection('productDataSheet');
        });
    }
}
