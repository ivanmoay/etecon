<?php

namespace App\Models;

use App\Models\UserForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the Form
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userForms(): HasMany
    {
        return $this->hasMany(UserForm::class, 'form_id');
    }
}
