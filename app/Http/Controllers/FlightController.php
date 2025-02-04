<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        // Dummy data for flights
        $flights = [
            [
                "id" => "1",
                "flight_name" => "Flight 101",
                "airline" => "Airways A",
                "starting_point" => "New York (JFK)",
                "destination" => "Los Angeles (LAX)",
                "departure_time" => "2024-08-01T10:00:00",
                "arrival_time" => "2024-08-01T13:00:00",
                "duration" => "5h",
                "price" => "$300",
                "seats_available" => 20,
                "class" => "Economy"
            ],
            [
                "id" => "2",
                "flight_name" => "Flight 202",
                "airline" => "Airways B",
                "starting_point" => "San Francisco (SFO)",
                "destination" => "Chicago (ORD)",
                "departure_time" => "2024-08-02T15:00:00",
                "arrival_time" => "2024-08-02T19:30:00",
                "duration" => "4h 30m",
                "price" => "$250",
                "seats_available" => 15,
                "class" => "Business"
            ],
            [
                "id" => "3",
                "flight_name" => "Flight 303",
                "airline" => "Airways C",
                "starting_point" => "Miami (MIA)",
                "destination" => "Houston (IAH)",
                "departure_time" => "2024-08-03T08:00:00",
                "arrival_time" => "2024-08-03T10:30:00",
                "duration" => "2h 30m",
                "price" => "$180",
                "seats_available" => 25,
                "class" => "Economy"
            ],
            [
                "id" => "4",    
                "flight_name" => "Flight 404",
                "airline" => "Airways D",
                "starting_point" => "Seattle (SEA)",
                "destination" => "Denver (DEN)",
                "departure_time" => "2024-08-04T12:00:00",
                "arrival_time" => "2024-08-04T15:30:00",
                "duration" => "3h 30m",
                "price" => "$220",
                "seats_available" => 10,
                "class" => "First"
            ],
            [
                "id" => "5",
                "flight_name" => "Flight 505",
                "airline" => "Airways E",
                "starting_point" => "Boston (BOS)",
                "destination" => "Atlanta (ATL)",
                "departure_time" => "2024-08-05T18:00:00",
                "arrival_time" => "2024-08-05T21:00:00",
                "duration" => "3h",
                "price" => "$200",
                "seats_available" => 30,
                "class" => "Economy"
            ]

        ];

        return view('add-flight', compact('flights'));
    }

    public function store(Request $request)
    {
        // Validate and handle the form submission
        $request->validate([
            'name' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'start' => 'required|date',
            'return' => 'required|date',
            'adults' => 'required|integer|min:1|max:20',
            // 'child' => 'required|integer|min:1|max:20',
        ]);

        // Handle the form submission logic (e.g., store the booking in the database)

        return redirect()->route('flights.index')->with('success', 'Flight booked successfully!');
    }
    public function book(Request $request)
    {
        $flight = Flight::find($request->input('flight_id'));

        return view('flight.booking-form', compact('flight'));
    }
}
