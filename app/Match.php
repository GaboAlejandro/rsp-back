<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use Notifiable;
    const UPDATED_AT = null;
    protected $fillable = ['created_at', 'winner'];

    public function __construct() {
        $this->setCreatedAt(new \DateTime());

    }

    public function setUpdatedAt($value)
    {
        return $this;
    }

    public function Round()
    {
        return $this->hasMany(Round::class);
    }
    public function Players()
    {
        return $this->hasMany(Player::class);
    }

}
