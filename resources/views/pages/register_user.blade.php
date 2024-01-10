@extends('layouts.main')

@section('title', 'REGISTER USER')

@section('content')
    <h2>REGISTER USER</h2>
    <form action="{{ route('processForm') }}" method="post">
        @csrf
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="number" id="quantity" name="email" required>
        <br>
        <label for="name">Password:</label>
        <input type="text" id="name" name="password" required>
        <button type="submit">REGISTER</button>
    </form>
@endsection
