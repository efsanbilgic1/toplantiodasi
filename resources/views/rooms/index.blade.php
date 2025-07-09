<!DOCTYPE html>
<html>
<head>
    <title>Toplantı Odaları</title>
</head>
<body>
    <h1>Toplantı Odası Listesi</h1>

    <ul>
        @foreach ($rooms as $room)
            <li>
                <strong>{{ $room->name }}</strong> - 
                Kapasite: {{ $room->capacity }} - 
                Durum: {{ $room->is_available ? 'Müsait' : 'Dolu' }}
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

    @foreach ($rooms as $room)
        <div style="margin-bottom: 30px;">
            <h2>{{ $room->name }}</h2>
            <p>Kapasite: {{ $room->capacity }}</p>
            <p>Durum: {{ $room->is_available ? 'Müsait' : 'Dolu' }}</p>

            <h4>Rezervasyonlar:</h4>
            <ul>
                @forelse ($room->reservations as $reservation)
                    <li>
                        {{ $reservation->start_time }} - {{ $reservation->end_time }} (Kullanıcı ID: {{ $reservation->user_id }})
                    </li>
                @empty
                    <li>Rezervasyon yok</li>
                @endforelse
            </ul>
        </div>
        <hr>
    @endforeach
</body>
</html>
