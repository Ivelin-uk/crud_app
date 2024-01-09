@extends('layouts.main')

@section('title', 'ADD PRODUCT')

@section('content')
    <h2>ADD PRODUCT</h2>
    <form action="{{ route('processForm') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
