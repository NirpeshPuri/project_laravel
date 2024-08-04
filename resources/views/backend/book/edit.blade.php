@extends('layouts.backend_master')
@section('title','Edit Book')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Create Student
                </div>
                <div class="card-body">
                    <form action="{{route('backend.book.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{$student->name}}" name="name" class="form-control" placeholder="Enter name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="{{$student->email}}" name="email" class="form-control" placeholder="Enter email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="roll_no">Roll No.</label>
                            <input type="text" value="{{$student->roll}}" name="roll" class="form-control" placeholder="Enter roll_no">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" value="{{$student->address}}" name="address" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="temp_address">Address</label>
                            <input type="text" vaule="value="{{$student->temp_address}}"" name="temp_address" class="form-control" placeholder="Enter temp_address">
                        </div>
                        <div class="form-group">
                            <label for="photos">Photos</label>
                            <input type="text" vaule="value="{{$student->photos}}"" name="photos" class="form-control" placeholder="Upload Photo Max size:2MB">
                        </div>
                        <div class="form-group">
                            <label for="passout_key">Passout Status</label>
                            <input type="radio" name="passout_key" value="1"> Yes
                            <input type="radio" name="passout_key" value="0" checked> No
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Student</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
