<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MeetingRoom;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Giriş yapan kullanıcı
        $rooms = MeetingRoom::with('reservations.user')->get(); // ilişkili verileri de çeksin

        return view('dashboard', compact('user', 'rooms'));
    }
}
