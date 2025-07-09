<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\MeetingRoom;
use App\Models\User;
use Illuminate\Support\Carbon;

class ReservationSeeder extends Seeder
{
    public function run(): void
    {
        $room = MeetingRoom::first();
        $user = User::first();

        if ($room && $user) {
            Reservation::create([
                'meeting_room_id' => $room->id,
                'user_id' => $user->id,
                'start_time' => Carbon::now()->addHours(1),
                'end_time' => Carbon::now()->addHours(2),
            ]);
        }
    }
}
