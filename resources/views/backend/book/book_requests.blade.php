@extends('layouts.backend_master')
@section('title', 'Book Requests')
@section('content')

<div class="container mt-5">
    <h2>Pending Book Requests</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>User Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($book_requests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->book->name }}</td>
                        <td>{{ $request->full_name }}</td>
                        <td>{{ $request->email }}</td>
                        <td>{{ $request->phone }}</td>
                        <td>{{ ucfirst($request->status) }}</td>
                        <!-- <td>
                            // Approve or Decline buttons 
                            <form action="{{ route('admin.book_request.approve', $request->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                            <form action="{{ route('admin.book_request.decline', $request->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Decline</button>
                            </form>
                        </td> -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No pending requests.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection


  