@extends('layouts.frontend_master')
@section('title','Dashboard')
@section('content')

<!-- <section class="publications">
    <div class="container">
        <h2 class="h2"><a href="https://www.ektabooks.com/show/ekta_publications">Nirpesh Publications</a>
            <div class="title_underline"></div>
        </h2>
    </div>
    <div class="publicationbg">
        <a href="https://www.ektabooks.com/show/ekta_publications"><div class="orangeribbon"><img src="images/ektaribbon.png"></div></a>
        <div class="container">
            <div class="row content">
                <div class="col-md-4 col-sm-6">
                    <div class="pub-cmndiv center">
                        <figure class="effect-julia">
                            <a href="https://www.ektabooks.com/show/book_list/78"><img src="images/atlas.png"></a>
                        </figure>
                        <h3 class="imagecaption">Academics</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pub-cmndiv center">
                        <figure class="effect-julia">
                            <a href="https://www.ektabooks.com/show?category=ekta publications&sub_category=children Literatures"><img src="images/vuenchalo.png"></a>
                        </figure>
                        <h3 class="imagecaption">Children’s Literature</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pub-cmndiv center">
                        <figure class="effect-julia">
                            <a href="https://www.ektabooks.com/show?category=ekta publications&sub_category=general"><img src="images/generall.png"></a>
                        </figure>
                        <h3 class="imagecaption">General</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- resources/views/test.blade.php -->
@php
    $books = $books ?? collect(); // Ensure $books is always a collection
@endphp


<section class="main-content">
    <div class="container">
        <div class="row">
            <!-- Sidebar Content -->
          
            <!-- //Sidebar End -->
            <div class="col-md-8">
                <div class="content-area">
                    <div class="card my-4">
                        <div class="card-header bg-dark">
                            <br><br>
                            <h1><b>Books</b></h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                
                            @if($books->count())
    @foreach($books as $book)
        <div class="col-lg-3 col-6">
            <div class="book-wrap">
                <div class="book-image mb-2">
                    <a href="{{ route('show_book_detail', $book->id) }}">
                        <img src="{{ asset('assets/images/book/' . $book->file_photo) }}" alt="{{ $book->name }}" height="150px">
                    </a>
                </div>
                <div class="book-title mb-2">
                    <a href="{{ route('show_book_detail', $book->id) }}">{{ Str::limit($book->name, 30) }}</a>
                </div>
                <div class="book-author mb-2">
                    <small>By {{ $book->author_name }}</small>
                </div>
                <div class="book-price mb-3">
                    <span><strong>Nrs {{ $book->price }} </strong></span>
                </div >
                <div class="book-price mb-4">
                    <span>Available:</span>
                @include('backend.book.check_passout_status',['available_status' => $book->available_status])
                </div>
                
                <!-- <button class="btn btn-primary" onclick="showDetails({{ $book->id }})">Show Details</button>
                <div id="book-details-{{ $book->id }}" class="book-details" style="display: none;">
                    <p>{{ $book->author_bio }}</p>
                    <p>{{ $book->description }}</p>
                </div> -->
                <div>
                <a href="{{route('show_book_detail',$book->id)}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="alert alert-warning">No books available</div>
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl.carousel/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('#thumbnail-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    </script>
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




<section>
    <div class="container">
        <h2 class="h2"><a href="https://www.ektabooks.com/new-arrivals">New Arrivals</a>
            <div class="title_underline"></div>
        </h2>
        <div class="row">
        </div>
    </div>

    <div class="newarival-bg">

        <a href="https://www.ektabooks.com/new-arrivals"><div class="orangeribbon"><img src="images/newribon.png"></div></a>
        <div class="container">
            <div style="float:left;">
                <div id="thumbnail-slider" class="shelfbg">
                    <div class="inner">
                        <ul>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6266"><img class="thumb" src="{{asset('/assets/images/logo.png')}}" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6316"><img class="thumb" src="{{asset('/assets/images/logo.png')}}" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6149"><img class="thumb" src="{{asset('/assets/images/logo.png')}}" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6377"><img class="thumb" src="{{asset('/assets/images/logo.png')}}" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6357"><img class="thumb" src="/images/books/thumb-kjMSfwNSFZweY1VhMgFO.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6351"><img class="thumb" src="/images/books/thumb-WVA3PhzU2pfKCyqrI26h.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6342"><img class="thumb" src="/images/books/thumb-SojqAMtrt7I3vr4w81Y5.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6339"><img class="thumb" src="/images/books/thumb-MfZSnNbdbJDLgKLd61ru.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6310"><img class="thumb" src="/images/books/thumb-OldrqC2hrAXcvPtIxzyb.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6219"><img class="thumb" src="/images/books/thumb-JqpaYK8kDPXMEfK99Bt5.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6182"><img class="thumb" src="/images/books/thumb-gJ7WTQMQwB0jyzlIBexQ.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6122"><img class="thumb" src="/images/books/thumb-41UnAokCPxvSIu5GAlBK.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6081"><img class="thumb" src="/images/books/thumb-udzbivJxEMd8TkTc8rjU.JPG" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6087"><img class="thumb" src="/images/books/thumb-ev6Ip7Yrc3keqM0Pi7aE.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6175"><img class="thumb" src="/images/books/thumb-AoJ5yAxAs3BfFprqs9ey.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6179"><img class="thumb" src="/images/books/thumb-o1RyUHUKMd9jlKZqLEvP.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6268"><img class="thumb" src="/images/books/thumb-S6LZvEBOKwPkiHkyWvSs.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6269"><img class="thumb" src="/images/books/thumb-HvSx79YnMlipBFsGpbch.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6265"><img class="thumb" src="/images/books/thumb-3Qj4BR17o8Kc64M81gxH.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6264"><img class="thumb" src="/images/books/thumb-Gct2aSI1sNslSCb74GhU.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6082"><img class="thumb" src="/images/books/thumb-tdXLwMSibOFhDe2fBJoo.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6251"><img class="thumb" src="/images/books/thumb-yfVuF4bqf5ZNRJkadcBr.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6195"><img class="thumb" src="/images/books/thumb-0vfKlsw3BDkWMkf3JBCs.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5916"><img class="thumb" src="/images/books/thumb-RUXYOGOcohuJV1y3mS7G.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6254"><img class="thumb" src="/images/books/thumb-3yu0ItmdcDmBOlLRNSRi.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5995"><img class="thumb" src="/images/books/thumb-PqwnmW0aZjcnKFx0Rap3.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6253"><img class="thumb" src="/images/books/thumb-cmrSAVaRHTEg3VWxfdZE.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6250"><img class="thumb" src="/images/books/thumb-ia5YUvLRjn4EAm3HNHTl.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6236"><img class="thumb" src="/images/books/thumb-hHkmg9TvSKv5QTNXmZDv.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6235"><img class="thumb" src="/images/books/thumb-uHdIP2hO1vf3p1IhhqKV.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6234"><img class="thumb" src="/images/books/thumb-LBypzfFYQIatcIEJxRSa.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6232"><img class="thumb" src="/images/books/thumb-ppldvap91BDhPytOpfpm.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6218"><img class="thumb" src="/images/books/thumb-Vwt4KykRnR4cJSkXM6b8.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6217"><img class="thumb" src="/images/books/thumb-Jp6C4rPiz867z5bMeYsM.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6057"><img class="thumb" src="/images/books/thumb-sFzkKRHPiWmCGcFDlq2f.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6088"><img class="thumb" src="/images/books/thumb-zRXAZhMGzV6olA6HjE7F.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6086"><img class="thumb" src="/images/books/thumb-A2AuQMxYo3sCAzOwY8tQ.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6083"><img class="thumb" src="/images/books/thumb-kT7Bbvpvi5RBDdCr7vyp.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6077"><img class="thumb" src="/images/books/thumb-8V9trG80yXcqaOa6XfHY.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/6075"><img class="thumb" src="/images/books/thumb-hJTywvTKWSI2dfEEp27V.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5958"><img class="thumb" src="/images/books/thumb-YnQtXJjMNAXRYdvkvxEy.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5955"><img class="thumb" src="/images/books/thumb-P2zu8jbO4GqAFOr9nkMa.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5951"><img class="thumb" src="/images/books/thumb-FjDOlYuSY2xfjU1UQ1jT.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5857"><img class="thumb" src="/images/books/thumb-1gUYKLBNdzFnxBh4XniD.JPG" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5842"><img class="thumb" src="/images/books/thumb-racDVQvEKv1KTpWyqqCo.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5850"><img class="thumb" src="/images/books/thumb-FASFLgAundNYYEYpDNwV.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5839"><img class="thumb" src="/images/books/thumb-R6FMGOgpLvKMq5PbFIHz.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5849"><img class="thumb" src="/images/books/thumb-S84EG00Fc7gLHJz7w3W8.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5838"><img class="thumb" src="/images/books/thumb-ImMN0sNY8Vqf0uZpF8lu.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5823"><img class="thumb" src="/images/books/thumb-NpCtIXNxBXcUJa1ubgyB.jpg" alt=""></a>
                            </li>
                            <li>

                                <a href="https://www.ektabooks.com/bookdetails/5047"><img class="thumb" src="/images/books/thumb-TRLWbAsiRA9yGj50STcV.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
