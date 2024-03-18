<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quest\StoreRequest;
use App\Models\Quest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Quest::create($data);
        User::firstOrCreate(['name' => $data['creator']]);
        return redirect()->route('quest.index');
    }
}
