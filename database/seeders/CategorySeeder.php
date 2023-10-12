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

        $root_category2 = Category::create([
            'categories_name' => 'High precision calibration',
            'is_root_category' => true
        ]);

        $root_category2->children()->create([
            'categories_name' => 'Industrial calibrator',
            'is_root_category' => false
        ]);
        $root_category2->children()->create([
            'categories_name' => 'Electrical calibrator',
            'is_root_category' => false
        ]);
        $root_category2->children()->create([
            'categories_name' => 'Pressure calibrator',
            'is_root_category' => false
        ]);
        $root_category2->children()->create([
            'categories_name' => 'Temperature calibrator',
            'is_root_category' => false
        ]);

        $root_category3 = Category::create([
            'categories_name' => 'Network tester',
            'is_root_category' => true
        ]);

        $root_category3->children()->create([
            'categories_name' => 'IP/Analog CCTV Monitor tester',
            'is_root_category' => false
        ]);
        $root_category3->children()->create([
            'categories_name' => 'Network system tester',
            'is_root_category' => false
        ]);
        $root_category3->children()->create([
            'categories_name' => 'Wi-Fi signal tester',
            'is_root_category' => false
        ]);
        $root_category3->children()->create([
            'categories_name' => 'LAN/Fiber cable tester',
            'is_root_category' => false
        ]);

        $root_category4 = Category::create([
            'categories_name' => 'Spectrum Analyzers for Sound and Vibration Analysis',
            'is_root_category' => true
        ]);

        $root_category4->children()->create([
            'categories_name' => 'Vibration Testing Equipment',
            'is_root_category' => false
        ]);
        $root_category4->children()->create([
            'categories_name' => 'Sound and vibration meter',
            'is_root_category' => false
        ]);
        $root_category4->children()->create([
            'categories_name' => 'Sound level meter',
            'is_root_category' => false
        ]);
        
        $root_category5 = Category::create([
            'categories_name' => 'Radio frequency and Telecommunications vibration meter',
            'is_root_category' => true
        ]);

        $root_category5->children()->create([
            'categories_name' => 'Signal generator',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Radio frequency signal generator',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Antenna and signal cable tester',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Microwave high frequency counter',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Frequency counter and analyzer',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Radio frequency power meter and power sensor',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Television and satellite signal analyzer',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Antenna analyzer',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'GPS signal simulator',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Traceable GPS-controlled Frequency Standards',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Spectrum analyzer',
            'is_root_category' => false
        ]);
        $root_category5->children()->create([
            'categories_name' => 'Signal attenuation',
            'is_root_category' => false
        ]);

        $root_category6 = Category::create([
            'categories_name' => 'Testers and tools',
            'is_root_category' => true
        ]);

        $root_category6->children()->create([
            'categories_name' => 'AC/DC electronic load',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'LCR Meter',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Underground cable and pipe Locator',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'DC power supply',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'AC power supply',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Packaging testing machine',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'High Voltage Tester',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Handyman tools',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Board repair tools',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Electrical Safety Analyzer',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Medical Safety Tester',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Electrical transformer meter',
            'is_root_category' => false
        ]);$root_category6->children()->create([
            'categories_name' => 'Battery analyzer',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'EMI test kit',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Training kit for education',
            'is_root_category' => false
        ]);
        $root_category6->children()->create([
            'categories_name' => 'Quick Charger Test Kit',
            'is_root_category' => false
        ]);
        
        $root_category7 = Category::create([
            'categories_name' => 'Measure temperature and humidity',
            'is_root_category' => true
        ]);

        $root_category7->children()->create([
            'categories_name' => 'Thermometer/humidity meter',
            'is_root_category' => false
        ]);
        $root_category7->children()->create([
            'categories_name' => 'Thermometers in the food industry',
            'is_root_category' => false
        ]);
        $root_category7->children()->create([
            'categories_name' => 'Infrared thermometer',
            'is_root_category' => false
        ]);
        $root_category7->children()->create([
            'categories_name' => 'Temperature and relative humidity generator',
            'is_root_category' => false
        ]);

        $root_category8 = Category::create([
            'categories_name' => 'Solar and electric vehicles',
            'is_root_category' => true
        ]);

        $root_category8->children()->create([
            'categories_name' => 'Meter for installing solar power systems',
            'is_root_category' => false
        ]);
        $root_category8->children()->create([
            'categories_name' => 'Safety meters for installing electric vehicle charging stations',
            'is_root_category' => false
        ]);

        $root_category9 = Category::create([
            'categories_name' => 'Biomedical test equipment',
            'is_root_category' => true
        ]);

        $root_category9->children()->create([
            'categories_name' => 'Medical device testing machine',
            'is_root_category' => false
        ]);
        $root_category9->children()->create([
            'categories_name' => 'Ventilator Performance Analyzer',
            'is_root_category' => false
        ]);
        $root_category9->children()->create([
            'categories_name' => 'Medical vital signs Analyzer',
            'is_root_category' => false
        ]);
    }
}
