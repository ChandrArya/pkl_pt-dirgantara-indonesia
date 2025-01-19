<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'board_list_id', 'position'];

    public function boardList()
    {
        return $this->belongsTo(BoardList::class);
    }
}
