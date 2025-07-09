<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\MeetingRoom;

class MeetingRoomController extends Controller
{
    public function index()
    {
        $rooms =\App\Models\MeetingRoom::with('reservations')->get();
    
        return view('meeting_rooms.index', compact('rooms'));
    }
}
