<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('quest.create');
    }
}
