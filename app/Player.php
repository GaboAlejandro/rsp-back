<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use Notifiable;
    protected $table = 'players';


    protected $fillable = ['id', 'name'];

    public $timestamps = false ;
    public function Round()
    {
        return $this->belongsTo(Round::class);
    }
}
