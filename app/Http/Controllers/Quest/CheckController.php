<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quest\CheckRequest;
use App\Models\Quest;
use App\Models\QuestUser;
use App\Models\User;

class CheckController extends Controller
{
    public function __invoke(CheckRequest $request)
    {
        $data = $request->validated();
        $user = User::firstOrCreate(['name' => $data['name']]);
        $quests = Quest::all();
        $user_quests = $user->quests;
        $return = view('quest.user', compact(['user', 'quests', 'user_quests']));

        $quest = Quest::firstOrCreate(['id' => $data['id']]);
        $quest_users = QuestUser::where('user_id', $user['id'])->where('quest_id', $data['id'])->get();

        if (!isset($quest_users[0])) {
            if ($data['correct_answer'] == $quest->correct_answer) {
                QuestUser::Create(['quest_id' => $quest->id, 'user_id' => $user->id]);
                $balance = $user->balance + $quest->cost;
                $user->update(['balance' => $balance]);
            } else {
                $return = redirect()->back();
            }
        }

        return $return;
    }
}
