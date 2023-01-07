<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function print_form(UserForm $userForm)
    {
        dd('xxx');
    }
}
