@extends('Layouts.main')
@section('contents')
    <style>
        .flight-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            margin: 170px;
        }

        .flight-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1 1 calc(33% - 40px);
            max-width: calc(33% - 40px);
            transition: transform 0.3s;
        }

        .flight-item:hover {
            transform: translateY(-10px);
        }

        .flight-item h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .flight-item p {
            margin: 5px 0;
        }

        .flight-item button {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            padding: 10px 15px;
            margin-top: 10px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .flight-item button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="flight-list">

        @foreach ($flights as $flight)
            <div class="flight-item">
                <form action="{{ url('/book-flight') }}" method="get">
                    <h3>{{ $flight['flight_name'] }}</h3>
                    <p><strong>Airline:</strong> {{ $flight['airline'] }}</p>
                    <p><strong>From:</strong> {{ $flight['starting_point'] }}</p>
                    <p><strong>To:</strong> {{ $flight['destination'] }}</p>
                    <p><strong>Departure:</strong>
                        {{ \Carbon\Carbon::parse($flight['departure_time'])->format('Y-m-d H:i A') }}</p>
                    <p><strong>Arrival:</strong> {{ \Carbon\Carbon::parse($flight['arrival_time'])->format('Y-m-d H:i A') }}
                    </p>
                    <p><strong>Duration:</strong> {{ $flight['duration'] }}</p>
                    <p><strong>Price:</strong> ${{ number_format((float) $flight['price'], 2) }}</p>
                    <p><strong>Seats Available:</strong> {{ $flight['seats_available'] }}</p>
                    <p><strong>Class:</strong> {{ ucfirst($flight['class']) }}</p>
                    <button type="submit" >Book Now</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
