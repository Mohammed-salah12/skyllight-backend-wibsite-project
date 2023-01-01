<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(['title' => 'هل لديك فعالية تريد تنفيذها ؟ تواصل مع شركة اضواء السماء لتنظيم المعارض والمؤتمرات لأي استفسارات والحصول على عرض سعر وسيقوم فريق خدمة العملاء بالرد على استفساراتكم.', 'expert_description' => 'تصميم وتنفيذ اجنحة المعارض ومنصات العرض وتنفيذها وفق المساحات المطلوبة بأحدث الطرق المصممة بصورة عالية الجودة ومجهزة بالكامل بشكل مميز وعصري يلائم جميع الرغبات.', 'created_at' => now(), 'updated_at' => now()]);
    }
}