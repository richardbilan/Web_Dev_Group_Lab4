@extends('components.layout')

@section('title', 'Web Development')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_h.css') }}">
    <!-- Bootstrap CSS for the modal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="container">
        <img src="{{ asset('assets/img/home/logo.svg') }}" alt="Laravel Logo" class="logo">
        <h1>Web Development</h1>
        <h2>Group Laravel Project</h2>
        <a href="{{ url('/about') }}">
            <button>Explore More</button>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dashboardModalLabel">Dashboard Access</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You have successfully accessed the dashboard!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Bootstrap JS for modal functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Check if the URL contains the age parameter (meaning user accessed the dashboard)
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('age')) {
                $('#dashboardModal').modal('show'); // Show modal if the user accesses the dashboard
            }
        });
    </script>
@endsection
