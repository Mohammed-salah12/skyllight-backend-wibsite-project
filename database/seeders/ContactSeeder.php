<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create(['title' => 'هل لديك فعالية تريد تنفيذها ؟ تواصل مع شركة اضواء السماء لتنظيم المعارض والمؤتمرات لأي استفسارات والحصول على عرض سعر وسيقوم فريق خدمة العملاء بالرد على استفساراتكم.', 'created_at' => now(), 'updated_at' => now()]);

    }
}