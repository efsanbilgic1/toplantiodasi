<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\MeetingRoom;
use App\Models\User;

class Reservation extends Model
{
    protected $fillable = [
        'meeting_room_id',
        'user_id',
        'start_time',
        'end_time',
    ];

    public function meetingRoom(): BelongsTo
    {
        return $this->belongsTo(MeetingRoom::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
