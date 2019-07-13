<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoundResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'p1_move' => $this->p1_move,
            'p2_move' => $this->p2_move,
            'round_number' => $this->round_number,
            'p1_id' => $this->player,
            'p2_id' => $this->player,
            'match_id' => $this->match
        ];
    }
}
