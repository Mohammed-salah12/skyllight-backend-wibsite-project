<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_description extends Model
{
    use HasFactory;

    public function service_images(){
        return $this->hasMany(Service_image::class);
    }

}