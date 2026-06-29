@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h3 class="mb-4">
        Guest Check-Out
    </h3>

    <div class="card shadow-sm">

        <div class="card-header">
            Data Booking
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Kamar</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($bookings as $booking)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $booking->nama_depan }}
                            {{ $booking->nama_belakang }}
                        </td>

                        <td>{{ $booking->nama_kamar }}</td>

                        <td>{{ $booking->checkin }}</td>

                        <td>{{ $booking->checkout }}</td>

                        <td>
                            Rp {{ number_format($booking->total,0,',','.') }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center">
                            Belum ada data booking.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
