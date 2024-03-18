<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use App\Models\Quest;

class IndexController extends Controller
{
    public function __invoke()
    {
        $quests = Quest::all();
        return view('quest.index', compact('quests'));
    }
}
