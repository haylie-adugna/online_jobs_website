@extends('layouts.app')
@section('content')
    <div class="card">
        <style>
            .buttons {
                margin-top: 20px;
            }
            h1{
                align-items: center;
            }

            button {
                border: none;
                border-radius: 5px;
                cursor: pointer;
                background-color: #007BFF;
                color: white;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #0056b3;
            }

            button:active {
                background-color: #003f7f;
            }
        </style>
        <h1>Coming Soon</h1>
        <p>This feature is under development. Please check back later.</p>
        <div class="buttons">
            <button onclick="history.back()">Back to Previous</button>
            <button onclick="window.location.href='/Dashboard'">Back to Home</button>
        </div>
    </div>
@endsection
