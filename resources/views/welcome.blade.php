@extends('components.layout')

@section('title', 'Web Development')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/styles_h.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="container">
        <img src="{{ asset('assets/img/home/logo.svg') }}" alt="Laravel Logo" class="logo">
        <h1>Web Development</h1>
        <h2>Group Laravel Project</h2>

        <form action="{{ route('check-age') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="age">Enter Your Age:</label>
                <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
