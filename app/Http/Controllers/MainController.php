<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function welcomePage()
    {
        return view('welcome');
    }
}