@extends('layouts.backend_master')
@section('title','Dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">View user help</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    View User Help
                </div>
                <div class="card-body">
                @include('includes.flash_message')
                    <table class="table table-bordered table-responsive">
                        @csrf
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        @foreach($contacts as $key=> $contact)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                        <td>
                        <form style="display: inline-block" method="post" action="{{url('backend/help_user',$contact->id)}}">
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