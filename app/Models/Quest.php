<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'quests';
    protected $guarded = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'quest_users', 'quest_id', 'user_id');
    }
}
