@extends('layouts.backend_master')
@section('title','Dashboard')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Help User</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Help Your User
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <td>{{$contact->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$contact->name}}</td>
                        </tr>
                        <tr>
                            <th>Author Name</th>
                            <td>{{$contact->email}}</td>
                        </tr>
                        <tr>
                            <th>Author Bio</th>
                            <td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$contact->subject}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$contact->message}}</td>
                        </tr>
                        <tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection