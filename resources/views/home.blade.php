<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roomoro</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/index.scss'])
    </head>
    <body>
        <div class="main">
            <header>
                <section class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" >
                </section>
                <section class="navigation">
                    <ul>
                        <li><a>MEN</a></li>
                        <li><a>WOMEN</a></li>
                        <li><a>KIDS</a></li>
                        <li><a>BEAUTY</a></li>
                    </ul>
                </section>
                <section class="header-right">
                    <div class="actions desktop">

                        <div class="profile">
                        <svg width="15px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]">

                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="title">Profile</span>
                        </div>

                        <div class="wishlist">
                            <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="title">Whishlist</span>
                        </div>

                        <div class="cart">
                            <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="title">Cart</span>
                        </div>
                    </div>
                </section>
            </header>

            <section class="slider-container">
                <ul class="slides">
                    <li style="background: url({{asset('assets/images/banner/slider1.jpg')}}) no-repeat center center;" class="selected">
                    <div>
                        <p>MINI FASHIONISTAS</p>
                        <h2>Stylish Statements for Young Icons</h2>
                        
                    </div>
                    </li>
                    <li style="background: url({{asset('assets/images/banner/slider2.jpg')}}) no-repeat center center;" class="selected">
                    <div>
                        <p>MINI FASHIONISTAS</p>
                        <h2>Stylish Statements for Young Icons</h2>
                    </div>
                    </li>
                    <li style="background: url({{asset('assets/images/banner/slider3.jpg')}}) no-repeat center center;" class="selected">
                    <div>
                        <p>MINI FASHIONISTAS</p>
                        <h2>Stylish Statements for Young Icons</h2>
                    </div>
                    </li>
                   
                </ul>
                <ul class="slider-nav">
                    <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                    <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                </ul>
                <ol class="slider-dot-nav">
                    <li><a class="selected" href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ol>
            </section>

            <section class="brands-container py-5">
                <div class="title-sec text-center py-3">
                    <h2 class="title pb-4">GRAND GLOBAL BRANDS</h2>
                    </div>
                    <div class="row m-0">
                    <ul class="brands slick-slider">
                        @foreach($brands as $brand)
                        <li class="slider-sec">
                            <img src="{{ asset('assets/images/brand/') . '/' . $brand . '.jpg' }}">
                            <h3>{{$brand}}</h3>
                        </li>
                        @endforeach
                    </ul>
                    </div>
                
            </section>

            <section class="text-banner">
                <div class="info-sec">
                    <img src="{{ asset('assets/images/banner/text-banner.jpg') }}">
                    <div class="text">
                        <h1>Chic Threads: Elevate Your Style with Our Latest Collection!</h1>
                        <p>Discover Fashion Forward Pieces That Reflect Your Unique Taste. Unleash Your Inner Trendsetter!</p>
                </div>
            </section>

            <section class="catrgories-container pb-5">
                <div class="title-sec text-center py-3">
                    <h2 class="title pb-4">SHOP BY CATEGORY</h2>
                    </div>
                    <div class="row cat-list m-0">
                        @foreach($categories as $key => $category)
                        @if($key < 11 )
                        <div class="{{ $key == 4 || $key == 5 || $key == 6 ? 'col-md-4' : 'col-md-3' }}">
                            <img src="{{ asset('assets/images/categories/') . '/' . $category . '.jpg' }}">
                            <div class="info">
                                <h3>{{$category}}</h3>
                                <p> 50% - 80% OFF </p>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                
            </section>

            <section class="offer-banners py-5">
            <div class="title-sec text-center pb-3">
                    <h2 class="title pb-4">NEW SEASON OFFERS</h2>
                    </div>
                <div class="row m-0">
                    <div class="col-md-6">
                        <div class="banner-sec">
                            <img src="{{ asset('assets/images/banner/offer-banner1.jpg') }}" >
                            <div class="text-block">
                                <p class="sub-title">SPECIAL OFFER</p>
                                <h2 class="title">Up tp 50% OFF on all Exclusive Brand</h2>
                                <button>Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-sec">
                            <img src="{{ asset('assets/images/banner/offer-banner2.jpg') }}" >
                            <div class="text-block">
                                <p class="sub-title">NEW SEASON SALE</p>
                                <h2 class="title"> On NEW Spring Collection Up tp 20% OFF</h2>
                                <button>Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
            <div class="footer-clean">
                <footer>
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                        <div class="logo">
                            <img height="40" class="pb-2" src="{{ asset('assets/images/logo-bg-tranpherent.png') }}" >
                        </div>
                                <!-- <p class="font-sm">Elevate your style with the latest trends – Shop fashion-forward looks at our online clothing store today!</p> -->
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>NEED HELP</h3>
                                <ul>
                                    <li><a href="#">Contact US</a></li>
                                    <li><a href="#">Track Order</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>SHOP BY</h3>
                                <ul>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Collections</a></li>
                                    <li><a href="#">Brand</a></li>
                                    <li><a href="#">Category</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>MORE INFO</h3>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    
                                </ul>
                            </div>
                            
                            
                        </div>
                        <div class="row pt-3">
                        
                            <div class="col-lg-12 text-center item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                                <p class="copyright">Roomoro © 2024</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            </section>

           
        </div>
        @vite([ 'resources/js/app.js'])

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            $('.slick-slider').slick({
                slidesToShow: 6,
                dots: true,
                slidesToScroll: 6,
                arrows: false,
                //centerMode: true,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                    }
                ]
                })


            var slider = $('.slider-container');
            var slides = $('.slides li');
            var slidesNumber = slides.length;
            var arrowNav = $('.slider-nav a');
            var dotNav = $('.slider-dot-nav');
            var dots = $('.slider-dot-nav a');

            var selectedSlide = 0;
            var prevSlide = 0;
            var intervalId;
            var setAutoPlay = true;

            arrowNav.on('click', function (event) {
            event.preventDefault();
            if ($(this).hasClass('next')) {
                console.log('next');
                var newSlideIndex = selectedSlide + 1;
            } else {
                console.log('prev');
                var newSlideIndex = selectedSlide - 1;
            }
            showNewSlide(newSlideIndex);
            })

            dots.on('click', function (event) {
            event.preventDefault();
            var newSlideIndex = dots.index(this);
            showNewSlide(newSlideIndex);
            });

            function autoPlay() {
            intervalId = setInterval(function () {
                showNewSlide(selectedSlide + 1);
            }, 5000);
            }

            if (setAutoPlay) {
            autoPlay();
            }

            function showNewSlide (index) {
            if (index < 0) {
                index = slidesNumber - 1;
            }
            if (index > slidesNumber - 1) {
                index = 0;
            } 
            prevSlide = selectedSlide;
            selectedSlide = index;

            for (var i = 0; i < slidesNumber; i++) {
                if (i < selectedSlide) {
                slides.eq(i).addClass('move-left').removeClass('selected visible');
                dots.eq(i).removeClass('selected');
                } else if (i == selectedSlide) {
                slides.eq(i).addClass('selected').removeClass('move-left');
                dots.eq(i).addClass('selected');
                } else {
                slides.eq(i).removeClass('selected move-left visible');
                dots.eq(i).removeClass('selected');
                }
            }

            slides.eq(prevSlide).addClass('visible');
            }

        </script>
    </body>
</html>
