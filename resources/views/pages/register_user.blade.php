@extends('layouts.main')

@section('title', 'REGISTER USER')

@section('content')
    <h2>REGISTER USER</h2>
    <form method="POST" action="{{ route('userRegster') }}">
        @csrf
        <div>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
@endsection
