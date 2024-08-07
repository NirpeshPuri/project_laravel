<!-- resources/views/test.blade.php -->
@extends('layouts.frontend_master')
@section('title','Dashboard')
@section('content')
<section class="main-content">
    <div class="container">
        <div class="row">
            <!-- Sidebar Content -->
            
            <!-- //Sidebar End -->
            <div class="col-md-8">
                <div class="content-area">
                    <div class="card my-4">
                        <div class="card-header bg-dark">
                            <h4>Books</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if(!$books->count())
                                   <div class="alert alert-warning">No books available</div>
                                @else
                                    @foreach($books as $book)
                                        <div class="col-lg-3 col-6">
                                            <div class="book-wrap">
                                                <div class="book-image mb-2">
                                                    <a href="{{ route('backend.book.show', $book->id) }}">
                                                        <img src="{{ asset('assets/images/book/' . $book->file_photo) }}" alt="{{ $book->name }}" height="100px">
                                                    </a>
                                                </div>
                                                <div class="book-title mb-2">
                                                    <a href="{{ route('backend.book.show', $book->id) }}">{{ Str::limit($book->name, 30) }}</a>
                                                </div>
                                                <div class="book-author mb-2">
                                                    <small>By {{ $book->author_name }}</small>
                                                </div>
                                                <div class="book-price mb-3">
                                                    <span><strong>{{ $book->price }} TK</strong></span>
                                                </div>
                                                <button class="btn btn-primary" onclick="showDetails({{ $book->id }})">Show Details</button>
                                                <div id="book-details-{{ $book->id }}" class="book-details" style="display: none;">
                                                    <p>{{ $book->author_bio }}</p>
                                                    <p>{{ $book->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function showDetails(bookId) {
    var detailsDiv = document.getElementById('book-details-' + bookId);
    if (detailsDiv.style.display === 'none') {
        detailsDiv.style.display = 'block';
    } else {
        detailsDiv.style.display = 'none';
    }
}
</script>
@endsection