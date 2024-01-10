@extends('layouts.main')

@section('title', 'ADD PRODUCT')

@section('content')
    <h2>ADD PRODUCT</h2>
    <form action="{{ route('processProduct') }}" method="post">
        @csrf
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <br>
        <button type="submit">Add</button>
    </form>
@endsection
