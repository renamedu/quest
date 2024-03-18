<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use App\Models\Quest;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Quest $quest)
    {
//        dd($quest);
        return view('quest.show', compact('quest'));
    }
}
