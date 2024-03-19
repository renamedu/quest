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

        $return = $this->service->checkAnswer($data, $user);

        return $return;
    }
}
