@section('title')
    {{ $title }}
@endsection
@extends('layouts.app')

@section('content')

<section class="xs-banner-sec owl-carousel banner-slider">
        <?php $i = 0; ?>
        @foreach ($services as $service)
        @if ($i < 3)
        <div class="banner-slider-item banner-item1" style="background-image: url(assets/images/banner-slider/{{ $service->image }});">
            <div class="slider-table">
                <div class="slider-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-content text-center">
                                    <h2>{{ $service->name }}</h2>
                                    <p>{{ $service->detail }}</p>
                                    <div class="xs-btn-wraper">
                                        <a href="/our-services" class="xs-btn">
                                            Our Services
                                        </a>
                                        <a href="#" class="xs-btn fill">
                                            Get Quote
                                        </a>
                                    </div><!-- .xs-btn-wraper END -->
                                </div><!-- .xs-welcome-wraper END -->
                            </div><!-- .column END -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div><!-- .slider table cell end -->
            </div><!-- .slider table end -->
        </div><!-- .xs-welcome-content END -->
        @endif
        <?php $i++; ?>
        @endforeach
</section><!-- End banner section -->
    
    
    <!-- start banner section -->
    <section class="promo-area-sec">
        <div class="container">
            <div class="promo-content-item">
                <div class="row">
                    <?php $i = 0; ?>
                    @foreach ($services as $service)
                        @if ($i < 3)
                         
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
                        <div class="single-promo-content">
                            <i class="icon-service_1"></i>
                            <h3 class="xs-service-title">{{ $service->name }}</h3>
                            <p>{{ $service->detail }}</p>
                            <a href="#" class="xs-btn sm-btn">Learn More</a>
                        </div>
                    </div>
                    @endif
                    <?php $i++; ?>
                    @endforeach
                </div><!-- row end-->
            </div><!-- promo-content end-->
        </div><!-- .container end -->
    </section><!-- End banner section -->
    
    
    <!-- start about us section -->
    <section class="about-sec section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInUp align-self-center" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="about-content">
                       
                        <h2 class="column-title"> <span class="xs-title">About Us</span>Welcome to Express Multimedia!</h2>
                        <p>
                           RENOWNED IN THE TRI-STATE FOR BEING INNOVATIVE AND CREATIVE IN THE AREAS OF AESTHETICS, INTERACTIVITY, USER EXPERIENCE AND FUNCTIONALITY
                        </p>
                        <a href="#" class="xs-btn sm-btn">Read More</a>
                    </div>
                </div>
                <div class="col-md-7 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                    <div class="about-video-item">
                        <div class="about-video-img">
                          
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QNGBwajfgAA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- .container end -->
    </section><!-- End about us section -->
    
    <!-- start service section -->
    <section class="service-sec section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item">
                       
                        <h2 class="section-title">
                             <span class="xs-title">Service we provide</span>
                            Our Services
                        </h2>
                    </div>
                </div>
            </div><!-- row end-->
            <div class="row">
                @foreach ($services as $service)
                 
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="assets/images/banner-slider/{{ $service->image }}" alt="">
                             <i class="icon-service_3"></i>
                        </div>
                        <h3 class="xs-service-title"><a href="#">{{ $service->name }}</a> </h3>
                        <p>{{ $service->detail }}</p>
                        <a href="#" class="readMore">Read more <i class="icon icon-arrow-right"></i> </a>
                    </div>
                </div>
                @endforeach

            </div><!-- row end-->
        </div><!-- .container end -->
    </section><!-- End service section -->
    
    <!-- start funfact section -->
    <section class="funfact-sec section-padding" style="background: url(assets/images/funfact-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item white">
                        
                        <h2 class="section-title">
                         <span class="xs-title">Our fun fact</span>
                            Best south Asian IT experts
                        </h2>
                    </div>
                </div>
            </div><!-- row end-->
    
            <div class="row">
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="single-funfact">
                        <i class="icon-fun_fact_1"></i>
                        <h3 class="funfact-title" data-counter="25">Best</h3>
                        <p>  south Asian IT experts</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                    <div class="single-funfact">
                        <i class="icon-fun-fact-02"></i>
                        <h3 class="funfact-title" data-counter="100">100</h3>
                        <p>expert designer and developers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                    <div class="single-funfact">
                        <i class="icon-fun_fact_3"></i>
                        <h3 class="funfact-title" data-counter="2535">2535</h3>
                        <p>happy customer</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                    <div class="single-funfact">
                        <i class="icon-fun_fact_4"></i>
                        <h3 class="funfact-title" data-counter="100">100</h3>
                        <p>professional awards</p>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- .container end -->
    </section><!-- End funfact section -->
    
    <!-- start pricing plan section -->
    
    
    
    
    <!-- start latest news section -->
    <section class="latest-news-sec section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="latest-news-content">
                       
                        <h2 class="column-title"> <span class="xs-title"></span>Latest News & Updates</h2>
                        <p><php echo "we use the latest technology like AI,Computer vision as per the client requirement for the best outcome."; ?>
                        </p>
                        <a href="#" class="xs-btn">View All</a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($newsupdates as $newsandupdate)
                        
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
                            <div class="single-latest-news">
                                <div class="latest-news-img">
                                    <a href="#">
                                        <img src="assets/images/news/{{ $newsandupdate->image }}" alt="">
                                    </a>
                                </div>
                                <div class="single-news-content">
                                    <span class="date-info">{{ $newsandupdate->publish_date }}</span>
                                    <h3 class="xs-post-title"><a href="#">{{ $newsandupdate->title }}</a></h3>
                                    <p>{!! $newsandupdate->detail !!}</p>
                                </div>
                            </div>
                        </div>
                            
                        @endforeach

                      

                    </div>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- End latest news section -->
    
    <!-- start call to action section -->
    <!-- <section class="call-to-action-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 xs-padding-0 call-action-item">
                    <div class="call-to-action-content">
                        <h2 class="column-title white"><span>Get start</span> digitizing <br/>your business </h2>
                        <p>The best digital marketers have a clear picture of how each digital marketing campaign supports their overarching goals. 
                        </p>
                        <div class="call-to-btn">
                            <a href="/our-services" class="xs-btn fill">Our Services</a>
                            <a href="/contact-us" class="xs-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>.row end
        </div>.container end
    </section>End call to action section -->
    
    <!-- start map section -->
    <div class="xs-map-sec">
        <div class="xs-maps-wraper">
            <div class="map">
                <iframe src="{{ session('map') }}" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div><!-- End map section -->
    
@endsection
