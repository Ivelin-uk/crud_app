@extends('layouts.main')

@section('title', 'LOGIN USER')

@section('content')
    <h2>LOGIN USER</h2>
    <form method="POST" action="{{ route('userLogin') }}">
        @csrf
        <div>
            @if ($errors->any())
                <div style="color: red;">
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif
        </div>
    
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
    
        <button type="submit">Login</button>
    </form>
@endsection
