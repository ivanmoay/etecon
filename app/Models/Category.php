<?php

namespace App\Models;

use App\Models\Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function forms()
    {
        return $this->hasMany(Form::class, 'category_id');
    }
}
