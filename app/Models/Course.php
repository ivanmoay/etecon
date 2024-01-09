<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function video()
    {
        return $this->hasMany(Video::class, 'course_id');
    }
}
