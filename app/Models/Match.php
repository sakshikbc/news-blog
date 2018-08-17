<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public $table = 'match';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
