<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use Notifiable;
    protected $table = 'rounds';
    protected $fillable = ['book_id', 'p1_move', 'p2_move', 'p1_id', 'p2_id', 'match_id', 'round_number'];


    public function users()
    {
        return $this->hasMany(Player::class);
    }

    public function Match()
    {
        return $this->belongsTo(Round::class);
    }
}
