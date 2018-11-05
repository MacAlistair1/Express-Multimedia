@section('title')
    {{ $title }}
@endsection
@extends('layouts.app')

@section('content')

<!-- start service section -->
<section class="recent-work-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-item">
                  
                    <h2 class="section-title">
                        
                        Gallery
                     </h2>
                </div>
            </div>
        </div><!-- row end-->
        <?php $i=1; ?>
      <div class="xs-portfolio-grid grid">
          @foreach ($projects as $project)
           
            <div class="xs-portfolio-grid-item category2 grid-item all">
                <a href="#popup_<?php echo $i; ?>" class="xs-single-portfolio-item xs-image-popup"  data-effect="mfp-zoom-in">
                    <img src="assets/images/our-project/{{ $project->image }}" alt="">
                    <div class="single-project-content">
                        <div class="xs-image-popup-icon">
                            <i class="icon icon-plus"></i>
                        </div>
                        <h3 class="xs-single-title">{{ $project->name }}</h3>
                        <p>{!! $project->detail !!}</p>
                    </div>
                </a><!-- .xs-single-portfolio-item END -->
                <div id="popup_<?php echo $i; ?>" class="container xs-gallery-popup-item mfp-hide">
                    <div class="row">
                        <div class="col-lg-5 xs-padding-0">
                            <div class="xs-popup-img">
                            <img src="assets/images/our-project/{{ $project->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="xs-popup-content">
                                <h2 class="hidden-title">Project info</h2>
                                <h3>{{ $project->name }}</h3>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="xs-popup-left-content">
                                            <li>
                                                <i class="icon icon-calendar-full"></i>
                                                <label>Project date</label>
                                                <span>{{ $project->p_date }}</span>
                                            </li>
                                            
                                            <li>
                                                <i class="icon icon-user2"></i>
                                                <label>Client</label>
                                                <span>{{ $project->client }}</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-invest"></i>
                                                <label>Project value</label>
                                                <span>$ {{ $project->value }}</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-map-marker2"></i>
                                                <label>Location</label>
                                                <span>{{ $project->location }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="xs-popup-right-content">
                                            <p>{!! $project->detail !!}</p>                
                                            <a href="#" class="xs-btn">PROJECT LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .xs-portfolio-grid-item END -->
        <?php $i++; ?>
          @endforeach
           
        </div>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="load-more-btn">
                    <a href="#" class="xs-btn">More View</a>
                </div>
            </div>
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End team section -->


@endsection
