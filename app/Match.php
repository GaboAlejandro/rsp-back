<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use Notifiable;
    protected $table = 'matches';
    protected $fillable = ['created_at', 'winner'];

    public function setUpdatedAt($value)
    {

    }

    public function Round()
    {
        return $this->hasMany(Round::class);
    }
}
