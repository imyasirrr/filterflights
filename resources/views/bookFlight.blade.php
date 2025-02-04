@extends('Layouts.main')
@section('contents')
    <style>
        .flight-list {
            padding: 20px;
        }
        .card {
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            font-size: 1.25rem;
            text-align: center;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    <div class="container">
        <div class="card">
            <div class="card-header">Book a Flight</div>
            <div class="card-body">
                <form class="flight-list" action="{{ url('/book-store') }}" method="get">
                    <div class="form-group">
                        <label for="passenger_name" class="col-form-label">Passenger Name:</label>
                        <input type="text" id="passenger_name" name="passenger_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">Number:</label>
                        <input type="text" id="number" name="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-form-label">Gender:</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-form-label">DOB:</label>
                        <input type="date" id="dob" name="dob" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Flight</button>
                </form>
            </div>
        </div>
    </div>
@endsection
