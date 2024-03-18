<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quest\UserRequest;
use App\Models\Quest;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(UserRequest $request)
    {
        $data = $request->validated();
        $user = User::firstOrCreate(['name' => $data['username']]);
        $quests = Quest::all();
        $user_quests = $user->quests;

        return view('quest.user', compact(['user', 'quests', 'user_quests']));
    }
}
