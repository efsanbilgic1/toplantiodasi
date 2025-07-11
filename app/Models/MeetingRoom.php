<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Reservation;

class MeetingRoom extends Model
{
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
