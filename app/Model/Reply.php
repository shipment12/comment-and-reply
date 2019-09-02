<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
