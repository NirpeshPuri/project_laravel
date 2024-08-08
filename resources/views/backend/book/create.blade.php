@extends('layouts.backend_master')
@section('title','Create Book')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Book Management <a class="collapse-item" href="{{route('backend.book.index')}}" style="border-left: solid 50px white;"><b>Go to List</b></a></h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Create Book
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('backend.book.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Book Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author</label>
                            <input type="text" name="author_name" class="form-control" placeholder="Enter Author">
                            @error('author_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="author_bio">Author Bio</label>
                            <input type="text" name="author_bio" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="file_photo_upload" id="file_photo_upload" class="form-control" accept="image/*">
                        @error('file_photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="uploadedImage" src="#" alt="Uploaded Photo" class="img-thumbnail" style="display:none;">
                    </div>
                        <div class="form-group">
                            <label for="available_status">Available Status</label>
                            <input type="radio" name="available_status" value="1"> Yes
                            <input type="radio" name="available_status" value="0" checked> No
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save Book</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const formData = new FormData(this);
    fetch('{{route("backend.book.store")}}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Image Uploaded Successfully');
        } else {
            alert('Error uploading image');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>

@endsection