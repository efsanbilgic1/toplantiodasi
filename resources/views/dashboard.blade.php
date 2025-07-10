<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hoş geldin, {{ $user->name }} 👋
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h3 class="text-2xl font-bold mb-4">Toplantı Odaları</h3>

        @foreach ($rooms as $room)
            <div class="bg-white shadow rounded-lg p-4 mb-6">
                <p><strong>{{ $room->name }}</strong> - Kapasite: {{ $room->capacity }} - Durum: {{ $room->is_available ? 'Müsait' : 'Dolu' }}</p>

                @if ($room->reservations->count())
                    <ul class="ml-4 text-gray-600 text-sm">
                        @foreach ($room->reservations as $reservation)
                            <li>
                                {{ $reservation->start_time }} - {{ $reservation->end_time }}
                                ({{ $reservation->user->name }})
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 text-sm">Rezervasyon yok.</p>
                @endif
            </div>
        @endforeach

        <div class="bg-white shadow rounded-lg p-4">
            <h4 class="text-lg font-semibold mb-2">Yeni Rezervasyon Oluştur</h4>

            <form method="POST" action="{{ route('reservations.store') }}">
                @csrf

                <label class="block">Toplantı Odası:</label>
                <select name="meeting_room_id" class="w-full border rounded p-2 mb-3">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                    @endforeach
                </select>

                <label class="block">Başlangıç Saati:</label>
                <input type="datetime-local" name="start_time" class="w-full border rounded p-2 mb-3" required>

                <label class="block">Bitiş Saati:</label>
                <input type="datetime-local" name="end_time" class="w-full border rounded p-2 mb-3" required>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Rezervasyon Oluştur
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
