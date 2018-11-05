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
                    
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="assets/images/banner-slider/{{ $service->image }}" alt="">
                            <i class="icon-Our_service_1"></i>
                        </div>
                        <h3 class="xs-service-title"><a href="#">{{ $service->name }}</a> </h3>
                        <p>{{ $service->detail }}</p>
                        <a href="#" class="readMore">Read more <i class="icon icon-arrow-right"></i> </a>
                    </div>
                </div>
                
                @endforeach


                
            </div><!-- row end-->
        </div><!-- .container end -->
    </section>
    
    
    
    <!--breadcumb start here-->
    
    <!--breadcumb end here-->
    <!--  service inner section -->
@endsection