<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ReservationSeeder::class);

        $this->call([
            MeetingRoomSeeder::class,
        ]);
    }
}
