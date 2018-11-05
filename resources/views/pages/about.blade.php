@section('title')
    {{ $title }}
@endsection
@extends('layouts.app')

@section('content')
<!-- start about us section -->

<!-- start service section -->

<!--breadcumb end here-->
<!-- header about inner section -->
<section class="about-inner section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
                <div class="about-inner-img">
                    <img src="assets/images/about/company.jpg" alt="">
                </div>
            </div><!-- col end -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="about-inner-content">
                    <h2 class="column-title2 column-title">About our Company</h2>
                   <div class="single-about-content">
                       
                        <p><?php echo session('about'); ?></p>
                   </div>
                  
                   <div class="row about-funfact">
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_1"></i>
                                <h4 class="funfact-title" data-counter="25">Experts +</h4>
                                <p>Personnels</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_2"></i>
                                <h4 class="funfact-title" data-counter="502">502 +</h4>
                                <p>happy customers</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_4"></i>
                                <h4 class="funfact-title" data-counter="100">Best</h4>
                                <p>professional awards</p>
                            </div>
                       </div>
                   </div>
                </div>
            </div><!-- col end -->
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End about inner section -->






<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url(assets/images/about/ready-to-contact.jpg) no-repeat center center /cover">
    <div class="container">
       <div class="col-lg-8 offset-lg-2">
           <div class="ready-to-contact-content">
               <h2>Are you ready to take our service?</h2>
               <p>Just join with us and forget everything you won<?php echo "'"; ?>t ignore.
                </p>
                <a href="/contact-us" class="xs-btn fill">CONTACT US</a>
           </div>
       </div>
    </div><!-- .container end -->
</section><!-- End ready to contact section -->

@endsection