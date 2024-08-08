@extends('layouts.frontend_master')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-12" style="margin-left: 150px; margin-top: 50px;">
        <div class="card mb-4">
            <div class="card-header">
                <h2>Book Detail</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>ID</th>
                        <td>{{ $book->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $book->name }}</td>
                    </tr>
                    <tr>
                        <th>Author Name</th>
                        <td>{{ $book->author_name }}</td>
                    </tr>
                    <tr>
                        <th>Author Bio</th>
                        <td>{{ $book->author_bio }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $book->price }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $book->description }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ asset('assets/images/book/' . $book->file_photo) }}" alt="Uploaded Photo" height="300px">
                        </td>
                    </tr>
                    <tr>
                        <th>Available Status</th>
                        <td>@include('backend.book.check_passout_status', ['available_status' => $book->available_status])</td>
                    </tr>
                </table>

                <!-- Request Book Button -->
                @if ($book->available_status == 1)
                    <a href="#" id="requestButton" class="btn btn-primary">Request Book</a>
                @else
                    <button class="btn btn-primary" disabled>Request Book (Not Available)</button>
                @endif

                <!-- Request Book Form -->
                <form id="requestForm" action="{{ route('frontend.book.request', $book->id) }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">

                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" name="full_name" id="full_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Toggle Form Visibility -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const requestButton = document.getElementById('requestButton');
        const requestForm = document.getElementById('requestForm');

        if (requestButton) {
            requestButton.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default action
                requestForm.style.display = requestForm.style.display === 'none' ? 'block' : 'none';
            });
        }
    });
</script>
@endsection
