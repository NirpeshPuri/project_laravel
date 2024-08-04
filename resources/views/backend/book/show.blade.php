@extends('layouts.backend_master')
@section('title','Book Details')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Book Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Book Detail
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <td>{{$book->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$book->name}}</td>
                        </tr>
                        <tr>
                            <th>Author Name</th>
                            <td>{{$book->author_name}}</td>
                        </tr>
                        <tr>
                            <th>Author Bio</th>
                            <td>{{$book->author_bio}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$book->price}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$book->description}}</td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            
 
    <td><img  src="{{ asset('assets/images/book/'.$book->file_photo)}}" alt="Uploaded Photo" height="100px"></td>

                        </tr>

                        <tr>
                            <th>Available Status</th>
                            <td>@include('backend.book.check_passout_status',['available_status' => $book->available_status])</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection