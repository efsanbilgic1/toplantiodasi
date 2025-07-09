<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\MeetingRoom;

class ReservationController extends Controller
{
    public function create()
    {
        $rooms = MeetingRoom::all();
        return view('reservations.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        Reservation::create([
            'meeting_room_id' => $request->meeting_room_id,
            'user_id' => 1, // şimdilik sabit kullanıcı
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect('/rooms');
    }
}
