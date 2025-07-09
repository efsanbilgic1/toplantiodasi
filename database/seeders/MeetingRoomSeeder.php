<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MeetingRoom;

class MeetingRoomSeeder extends Seeder
{
    public function run(): void
    {
        MeetingRoom::create([
            'name' => 'Konferans Salonu A',
            'capacity' => 30,
            'is_available' => true,
        ]);

        MeetingRoom::create([
            'name' => 'Toplantı Odası B',
            'capacity' => 15,
            'is_available' => false,
        ]);
    }
}
