<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerMatch extends Model
{
    public $table = 'player_match';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
