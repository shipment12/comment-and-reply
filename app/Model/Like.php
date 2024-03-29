<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
