<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_image extends Model
{
    use HasFactory;
    public function service_description() {
        return $this->belongsTo(Service_description::class);
    }
}