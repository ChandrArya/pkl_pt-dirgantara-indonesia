<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function boardLists()
    {
        return $this->hasMany(BoardList::class);
    }
}
