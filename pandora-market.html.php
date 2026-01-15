<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Chesswarrior ,Chesswar2 ,Game ,BoardGame">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <title>Chesswar2</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chart.css')}}">

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>

    <!-- Start: Preloader
    ============================= -->

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <!-- End: Preloader
    ============================= -->

    <!-- Start: Header
    ============================= -->
    <header id="header">

        @include('common.header')

        <section id="breadcrumb-area" class="shop-partner">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Shop Partner</h1>
                        <ul class="breadcrumb-nav list-inline">
                            <li><a href="{{url('home')}}">Home</a></li>
                            <li class="active">Shop Partner</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- End: Header
    ============================= -->

    <!-- Start: Shop
    ============================= -->
    <section id="ourteam" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-header none-p">
                        <h2>Shop</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.1s"></p>
                    </div>
                </div>
            </div>


            <!-- Start: shop name
            ============================= -->
            <section id="shop">
                <div class="container">
                    <div class="row p-3" id="set">
                        @foreach($shops as $shop)
                        <div class="col-12 d-lg-flex d-block mb-4 event-block">
                            <div class="col-lg-4 col-md-12 col-12 event-block-img">
                                <div class="img-rounded"><img src="{{$shop->shop_logo_url}}" alt=""></div>
                                <!-- TO EDIT -->
                                <div class="img-event"><img src="{{$shop->shop_img_url}}" alt="" class="img-responsive center-block"></div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 set-block">
                                <div class="shop-status">
                                    @if(in_array("Battle Report", $shop->tags))
                                    <span class="battle-report" title="Battle Report"><i class="fas fa-chart-bar"></i> Battle Report</span>
                                    @endif

                                    @if(in_array("Play Test", $shop->tags))
                                    <span class="play-test" title="Play Test"><i class="fab fa-delicious"></i> Play Test</span>
                                    @endif

                                    @if(in_array("Sell Items", $shop->tags))
                                    <span class="sell-items" title="Sell Items"><i class="fas fa-chess-knight"></i> Sell Items</span>
                                    @endif
                                </div>
                                <div class="set-title">{{$shop->name}}</div>
                                <div class="set-detail">
                                    <ul class="accessory-pieces">
                                        <li>{{$shop->address}}</li>
                                        <li><h4><a class="phone-number" href="tel:{{$shop->tel}}"><i class="fas fa-phone-alt"></i></a> {{$shop->tel}}</h4></li>
                                    </ul>
                                    <div class="stats-pieces">
                                        <div class="chart">
                                            <ul class="bar-chart" data-bars='[{{implode(",", $shop->frequencies)}}]' frequency-show=false data-max="20" data-unit="" data-title-bottom="อา,จ,อ,พ,พฤ,ศ,ส" data-width="20"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="set-code">
                                    <a class="view-more" target="_blank" href="{{$shop->google_map_url}}">
                                        Map Location
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End: shop name
            ============================= -->

        </div>
    </section>
    <!-- End: Shop
    ============================= -->

    <!-- Start: Footer Sidebar
    ============================= -->
    @include('common.footer')
    <!-- End: Footer Sidebar
    ============================= -->


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

    <!-- Smooth Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

    <!-- Custom Script -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- bar chart -->
    <script src="{{ asset('assets/js/jquery.chart.js') }}"></script>

    <script>
        $('.bar-chart').cssCharts({
            type: "bar"
        });


        $('.hero-item').click(function() {
            window.open("{{url('brochure/hero')}}", '_blank');
        });
    </script>

</body>

</html>