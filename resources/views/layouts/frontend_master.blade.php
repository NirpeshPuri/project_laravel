
<!DOCTYPE html>
<html lang="en"  class="no-js">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/bootstrap.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/font-awesome/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/btnhover.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/galleryslider.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/thumbnail-slider.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/hovereffect.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/effects.css" />
    <link rel="stylesheet" type="text/css" href="https://www.ektabooks.com/css/sweetalert.css" />
    <link rel="stylesheet" href="https://www.ektabooks.com/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .badge1 {
            position:relative;
        }
        .badge1[data-badge]:after {
            content:attr(data-badge);
            position:absolute;
            top:-10px;
            right:-10px;
            font-size:.7em;
            background:brown;
            color:white;
            width:18px;height:18px;
            text-align:center;
            line-height:18px;
            border-radius:50%;
            box-shadow:0 0 1px #333;
        }

    </style>

@yield('css')
</head>
<body>
<body><section class="logoBlock">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="img"><a href="{{route('user_home')}}"><img src="{{asset('/assets/images/logo.png')}}" style="width: 150px"/></a></div>
            </div>
            <div class="col-md-8 col-sm-8 tb20p left">
                <!-- <div class="input-group" id="adv-ssearch">
                    <div class="input-group-btn" style="display:none">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn-default dropdown-toggle form-control" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-left" role="menu">
                                    <form class="form-horizontal" method="get" action="https://www.ektabooks.com/search_showroom_books">
                                        <label for="contain">Showroom Books</label>
                                        <div id="custom-search-input">
                                            <div class="input-group">
                                                <input name="search" type="text" class="form-control height"  placeholder="Search by title or author here..." value="">
                                                <span class="input-group-btn">
													<button class="btn btn-info" type="submit">
														<i class="fa fa-search"></i>
													</button>
												</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-inline searchform" id="searchForm" method="get" action="https://www.ektabooks.com/search">
                        <div class="form-group">
                            <input name="keyword" type="text" class="form-control catsearch" id="search" placeholder="Search by title, author or ISBN here..." value="">
                            <input type="submit" value="search" class="btn srchicn">
                        </div>
                    </form>
                </div> -->
                <h1>Welcome to our Book Store</h1>
            </div>



        </div>
        <!-- <div class="col-md-1  col-sm-1 tb20p">
            <div class="shopingcart right">
                <a href="#"><i class="fa fa-user baseclr"></i></a>
                <a href="#"><i class="fa fa-heart primeryclr"></i></a>
                <a href="" id="cart-link"  class="badge1" data-badge=""><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div> -->
    </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default mainNav">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                              


                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{route('user_home')}}">HOME</a></li>
                                <li><a href="{{url('about')}}">About Us</a></li>

                                <li><a href="{{url('contact_us')}}">CONTACT US</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</section>



<section class="bannerbg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img src="{{asset('assets/images/banner3.jpg')}}" alt="" style="width: 1140px; height: 278px; ">
            </div>
        </div>
    </div>
</section>

@yield('content')
<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">What our customers say
                    <div class="title_underline"></div>
                </h2>
                <div class="carousel testimonialslide slide" id="fade-quote-carousel" data-ride="carousel" data-interval="9000">
                    // Carousel indicators 
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0" class=" active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="3" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="4" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="5" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="6" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="7" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="8" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="9" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="10" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="11" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="12" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="13" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="14" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="15" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="16" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="17" class=" "></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="18" class=" "></li>
                    </ol>
                    // Carousel items 
                    <div class="carousel-inner">
                        <div class="active  item">
                            <div class="profile-circle"><img src="upload/1504519897.png"></div>
                            <p>Good place for readers, good response</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Amrit Giri</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1504519985.png"></div>
                            <p>Renowned book store in Kathmandu valley since long time back. Please visit once to explore for different varieties of books and stationary.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Rabindra Maharjan</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1504520144.png"></div>
                            <p>Lots of books, a lot of books! More than 4 storeys of books. Also has stationary. Accepts card payments</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Umesh Kirant</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1504520256.png"></div>
                            <p>This is the best books publisher and books distributor in Nepal. If you are a book lover you cannot miss Ekta Books.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Sunil Varghese</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1504520615.png"></div>
                            <p>They have a lot of books. You&#039;ll end up buying something that you didn&#039;t think you needed</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Prabhat Giri</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1512536356.png"></div>
                            <p>Plenty of books in lot of varieties. Electronic billing system and good service as one can find very hard to get the book searching for.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Diwash Malla Thakuri</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1512536518.png"></div>
                            <p>Biggest selection I&#039;ve found in the valley. Good early reader section for kids.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Holly Patty</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1512536765.png"></div>
                            <p>Among the biggest collections on Kathmandu. Centrally located in Thapathali. Provides bulk deals too</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Shubham Malpani</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1512536938.png"></div>
                            <p>Lots of books to choose from. I could find books that I couldn&#039;t find anywhere around the city. The books are well organized by their genre as well, so searching for the right book is easy.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Sujan Shrestha</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1512537387.png"></div>
                            <p>Whether it&#039;s a hard cover or a paperback, fiction or nonfiction, this place has every book you need. If this place ran of stock for the book you are looking for, then good luck finding it anywhere else.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Bishwa Babu Acharya</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1517980876.png"></div>
                            <p>it is a book store where customer care is better than any other book shop i have visited in ktm so far.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Krishna Karkee</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1517985362.png"></div>
                            <p>one of my most fav places to buy books...i loved it...used to spent hours at the building when i was studying in kathmandu....</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Yogesh Agrawal</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1528374962.png"></div>
                            <p>It is really awesome book store .... guys if you want to buy any types of books you can get here...</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Jodon Sanche</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1538051551.png"></div>
                            <p>This is the greatest storehouse of the different varieties of books I have ever visited in Nepal.
                            </p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Suresh Dahal</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1538051795.png"></div>
                            <p>The leading publisher &amp; relaible distributor of Nepal with best collection of books.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Rajesh Mahindroo</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1539239656.png"></div>
                            <p>I recommend this as so nice book store having varieties of books for different age group by wishing and praying for best selling; progressing by staying at comfort and convenient zone for both customers and sellers....ommmmm!</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Nagendra Baba Patelsingh</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1547033068.png"></div>
                            <p>A truly wonderful book store and the publishing house of great reputation!</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Devendra Neupane</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1592987743.png"></div>
                            <p>Variety of books. Amazing store. The feel to be inside this building is just so special. You can get all kind of books here. I really enjoy to shop around here when I have no particular books in mind and just want to find something interesting. Books include course book of various faculties, kids novel, fiction and non fiction and many more. The parking space is also available, which is a huge bonus since lots of book store in Kathmandu lacks one.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Alabhya Dahal</small>

                        </div>
                        <div class=" item">
                            <div class="profile-circle"><img src="upload/1592987790.png"></div>
                            <p>As a book lover and even a common reader you cant find another place like this in Kathmandu. Great place to find new/old books with reasonable price and helpful people. Planning to go there again soon.</p>
                            <small class="small"><i class='fa  fa-long-arrow-right'></i>Kalyan Ghimire</small>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- Modal popup window -->
<div id="myModal" class="modal fade"  data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header" style="padding:8px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center;font-weight:600;color: #790707" >NOTICE</h4>
            </div>
            <div class="modal-body" style="padding: 10px 15px">
                <div class="row">
                    <div class="col-lg-12"><p style="text-align: justify;">Dear valued customer, please give us a call to check the availability of the book, as sometimes we are out of stock. Please contact us in 01-5345787, 5330729, or find us on Facebook. Together with our team, we promise to do our very best just to cater to every little thing you need. Thank you for your understanding.
                        </p></div>
                </div>


            </div>
            <div class="modal-footexr" style="text-align: right;padding:10px">
                <button type="button" style="margin: 0;font-size:12px;background:#17185d;border:1px solid #17185d;" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="193114130754896"
     theme_color="#17185d"
     logged_in_greeting="Namaste, How can we help you?"
     logged_out_greeting="Namaste, How can we help you?">
</div>

<section class="quick-nav">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="comndiv">
                    <a href="{{url('contact_us')}}"><div class="iconcircle"><i class="fas fa-phone-volume" style="padding-top:24px;"></i></div></a>

                    <span class="circleinfo">
						<a href="{{url('contact_us')}}"><h3>Inquiry</h3></a>
						Inquiry

					</span>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="comndiv">
                    <a href="{{url('contact_us')}}"><div class="iconcircle"><i class="fa-solid fa-user" style="padding-top:24px;"></i></div></a>
                    <span class="circleinfo">
						<a href="{{url('contact_us')}}"><h3>Customer Care</h3></a>
						Help and Feedback
					</span>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="comndiv">
                    <a href="{{url('brances')}}"><div class="iconcircle"><i class="fas fa-code-branch" style="padding-top:24px;"></i></div></a>
                    <span class="circleinfo">
						<a href="{{url('brances')}}"><h3>Nirpesh Branches</h3></a>
						Branch Offices
					</span>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="tb40p">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="whitebgclr">
						<span class="picofdwik">
							<img src="{{asset('/assets/images/logo.png')}} " height='280px' width='600px'>
						</span>
                    <div id="dg-container" class="dg-container container">
                        <div class="dg-wrapper tb40m">
                            <a href="https://www.ektabooks.com/bookdetails/6380"><img src="/images/books/thumb-E1N7gAePf7EU9kTcjThN.jpg" alt=""></a>
                            <a href="https://www.ektabooks.com/bookdetails/6266"><img src="/images/books/thumb-f0sFEc91jNNgc760ZIvL.jpg" alt=""></a>
                            <a href="https://www.ektabooks.com/bookdetails/6316"><img src="/images/books/thumb-nuGUTYzVfcahJkqkMeoY.jpg" alt=""></a>
                            <a href="https://www.ektabooks.com/bookdetails/6320"><img src="/images/books/thumb-kIxpulePmbkfee4wYKMm.jpg" alt=""></a>
                            <a href="https://www.ektabooks.com/bookdetails/6149"><img src="/images/books/thumb-2EHEZIZKHI6tBxkDI0Nc.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contactinfo right">
                    <h2>NIRPESH BOOKS PVT. LTD.</h2>
                    <p>Thapathali, Kathmandu, Nepal  <i class="fa fa-map-marker"></i></p>
                    <p>www.nirpeshbooks.com  <i class="fa fa-globe"></i></p>
                    <p>nirpeshbook@mos.com.np  <i class="fa fa-envelope"></i></p>
                    <p>+977-9844734127  <i class="fa fa-phone"></i></p>
                </div>
                <div class="cleared"></div>
                <div class="btm-socialicons right">
                    <a href="https://www.facebook.com/ektabooks" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="btmfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>© 2024 Nirpesh Books Pvt. Ltd. All rights reserved | Design by <a href="http://soanitech.com/" target="_blank">ABC Tech Pvt. Ltd</a></p>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('assets/backend/vendor/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/js/css3-animate-it.js')}}"></script>
<script src="{{asset('assets/backend/vendor/js/thumbnail-slider.js')}}"></script>
<!-- <script src="{{asset('assets/backend/vendor/https://www.ektabooks.com/js/sweetalert-dev.js')}}" ></script> -->

<script src="/js/modernizr.js"></script>
<script>
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 500
        })
    });
</script>
<script>
    // For Demo purposes only (show hover effect on mobile devices)
    [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
        el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    } );
</script>
<script type="text/javascript" src="/js/jquery.gallery.js"></script>
<script type="text/javascript">
    $(function() {
        $('#dg-container').gallery({
            autoplay	:	true
        });
    });
</script/>
<script type="text/javascript">
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown("slideDown");
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp("slideUp");
    });
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3774628-10']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    $( document ).ready(function() {
        if (document.cookie.indexOf('visited=false') == -1){
            // load the overlay
            $('#myModal').modal({show:true});

            var year = 1000*60*60*24*365;
            var expires = new Date((new Date()).valueOf() + year);
            document.cookie = "visited=true;expires=" + expires.toUTCString();

        }
    });
</script>
<script>
    var id = window.location.href.split("/").pop();
    $(function() {
        var badge = $(".badge1");
        $(".badge1").attr("data-badge", 0);
        loadSettings();
    });
</script>
<script>
    function changeValue(e){
        e.preventDefault();
        var value = $(".badge1").attr('data-badge');
        var adcartValue = $(".adcart").text().trim();
        var oldBooks = JSON.parse(sessionStorage.getItem('book_lists'));


        if(oldBooks === null){
            var oldBooks = []; // if not, create one

        }
//var id = window.location.href.split("/").pop();
        if(adcartValue == 'add to cart'){
            value++;
            $(".adcart").text("remove from cart").append("<i class='fa fa-shopping-cart'>");
            var new_book = {
                'book_id': id,
                'book_name': $('.nameofthebook').html(),
                'book_price': $('.price').html(),
                'book_image': $('.detailimg img').attr('src'),
                'book_qty': 1
            }
            var exists = check_if_exists(oldBooks, id);
            if(!exists){
                oldBooks.push(new_book);
            }
            sessionStorage.setItem("book_lists", JSON.stringify(oldBooks));
            loadSettings();
        }else{
            value--;
            for (var i = oldBooks.length - 1; i >= 0; i--) {
                if(oldBooks[i].book_id == id){

                    oldBooks.splice(i, 1);
                    sessionStorage.setItem("book_lists", JSON.stringify(oldBooks));
                }
            }
            $(".adcart").text("add to cart").append("<i class='fa fa-shopping-cart'>");
            loadSettings();
        }
        $(".badge1").attr('data-badge', oldBooks.length);
    }

    function check_if_exists(oldBooks, id){
        for (var i = oldBooks.length - 1; i >= 0; i--) {

            if (oldBooks[i].book_id == id){
                return true;
            }
        }
        return false;
    }

    function loadSettings(){
        $(".badge1").attr('data-badge',  JSON.parse(sessionStorage.getItem('book_lists')).length);
        var exists = check_if_exists(JSON.parse(sessionStorage.getItem('book_lists')), id);
        if(exists){
            $(".adcart").text("remove from cart").append("<i class='fa fa-shopping-cart'>")
        }
        $("#cart-link").attr("href", "/cart?quantity="+JSON.parse(sessionStorage.getItem('book_lists')).length);

    }

</script>

<script src="{{asset('assets/backend/vendor/https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>
<script>
    $(document).ready(function() {
        $( "#search" ).autocomplete({

            source: function(request, response) {
                $.ajax({
                    url: "https://www.ektabooks.com/searchauto",
                    data: {
                        term : request.term
                    },
                    dataType: "json",
                    success: function(data){
                        var resp = $.map(data,function(obj){
                            //console.log(obj.city_name);
                            return obj.product_name;

                        });

                        response(resp.slice(0,10));
                    }
                });
            },
            select: function( event, ui ) {
                var origEvent = event;
                while (origEvent.originalEvent !== undefined){
                    origEvent = origEvent.originalEvent;
                }
                if (origEvent.type == "click"){
                    document.getElementById("search").value = ui.item.value;
                    document.getElementById("searchForm").submit();
                } else {
                    document.getElementById("searchForm").submit();
                }
            }
            ,
            minLength:1,
            delay:0,
        });
    });

</script>
</body>
</html>
@yield("js")


