@extends('layouts.backend_master')
@section('title','Edit Book')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Book Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Edit Book
                </div>
                <div class="card-body">
                    <form action="{{route('backend.book.update', $book->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{$book->name}}" name="name" class="form-control" placeholder="Enter name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author</label>
                            <input type="text" value="{{$book->author_name}}" name="author_name" class="form-control" placeholder="Enter author_name">
                            @error('author_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="author_bio">Author Bio</label>
                            <input type="text" value="{{$book->author_bio}}" name="author_bio" class="form-control" placeholder="Enter author_bio">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" value="{{$book->price}}" name="price" class="form-control" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" value="{{$book->description}}" name="description" class="form-control" placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="photos">Photos</label>
                            <input type="file" value="{{$book->file_photo_upload}}" name="file_photo_upload" class="form-control" placeholder="Upload Photo Max size:2MB">
                        </div>
                        <div class="form-group">
                            <label for="available_status">Available Status</label>
                            <input type="radio" name="available_status" value="1"> Yes
                            <input type="radio" name="available_status" value="0" checked> No
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
<script>
document.getElementById('file_photo_upload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.getElementById('uploadedImage');
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>