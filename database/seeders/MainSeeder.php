<?php

namespace Database\Seeders;

use App\Models\Main;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Main::create(['main_title' => 'شركة أضواء السماء لتنظيم المعارض والمؤتمرات','sub_title' =>'تنظيم معارض ومؤتمرات وفعاليات داخل وخارج الرياض، حفلات خاصة وعامة شاشات .. اضاءات .. صوتيات للتنسيق', 'created_at' => now(), 'updated_at' => now()]);
    }
}