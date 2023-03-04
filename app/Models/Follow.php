<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public function userDoingTheFollowing()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userBeingFollowed()
    {
        return $this->belongsTo(User::class, 'followeduser');
    }
}
