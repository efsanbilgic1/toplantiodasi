<!DOCTYPE html>
<html>
<head>
    <title>Rezervasyon Oluştur</title>
</head>
<body>
    <h1>Yeni Rezervasyon</h1>

    <form method="POST" action="/reservations">
        @csrf

        <label>Toplantı Odası:</label>
        <select name="meeting_room_id">
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label>Başlangıç Saati:</label>
        <input type="datetime-local" name="start_time" required>
        <br><br>

        <label>Bitiş Saati:</label>
        <input type="datetime-local" name="end_time" required>
        <br><br>

        <button type="submit">Rezervasyon Oluştur</button>
    </form>
</body>
</html>
