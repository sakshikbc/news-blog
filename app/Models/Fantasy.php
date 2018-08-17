<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;

class Fantasy extends Model
{
    public $table = 'fantasies';
    
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
