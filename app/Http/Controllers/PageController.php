<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function collage()
    {
        return view('collage'); // Возвращаем представление страницы 1
    }
}
