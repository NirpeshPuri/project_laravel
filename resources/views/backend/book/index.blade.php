@extends('layouts.backend_master')
@section('title','List Of Book')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    List of Book
                </div>
                <div class="card-body">
                @include('includes.flash_message')
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Author name</th>
                            <th>Price</th>
                            <th>Available Key</th>
                            <th>Action</th>
                        </tr>
                        @foreach($books as $key=> $book)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->author_name}}</td>
                                <td>{{$book->price}}</td>
                                <td>
                                    @include('backend.book.check_passout_status',['available_status' => $book->available_status])
                                </td>
                                <td>
                                    <a href="{{route('backend.book.show',$book->id)}}" class="btn btn-primary">View</a>
                                    <a href="{{route('backend.book.edit',$book->id)}}" class="btn btn-warning">Edit</a>

                                    <form style="display: inline-block" method="post" action="{{route('backend.book.destroy',$book->id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection