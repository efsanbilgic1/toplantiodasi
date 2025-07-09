<!DOCTYPE html>
<html>
<head>
    <title>Toplantı Odası Listesi</title>
</head>
<body>
    <h1>Toplantı Odaları</h1>

    <ul>
        @foreach ($rooms as $room)
            <li>
                <strong>{{ $room->name }}</strong> - 
                Kapasite: {{ $room->capacity }} - 
                Durum: {{ $room->is_available ? 'Müsait' : 'Dolu' }}

                <ul>
                    @forelse ($room->reservations as $reservation)
                        <li>
                            🕒 {{ $reservation->start_time }} → {{ $reservation->end_time }}
                        </li>
                    @empty
                        <li><em>Henüz rezervasyon yok</em></li>
                    @endforelse
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Toplantı Odaları</title>
</head>
<body>
    <h1>Toplantı Odası Listesi</h1>

    <a href="/reservations/create">+ Yeni Rezervasyon Oluştur</a>

    <ul>
        @foreach ($rooms as $room)
            <li>
                <strong>{{ $room->name }}</strong><br>
                Kapasite: {{ $room->capacity }}<br>
                Durum: {{ $room->is_available ? 'Müsait' : 'Dolu' }}<br>

                <h4>Rezervasyonlar:</h4>
                <ul>
                    @forelse ($room->reservations as $reservation)
                        <li>
                            {{ $reservation->start_time }} → {{ $reservation->end_time }}
                        </li>
                    @empty
                        <li><em>Henüz rezervasyon yok</em></li>
                    @endforelse
                </ul>
                <hr>
            </li>
        @endforeach
    </ul>
</body>
</html>
