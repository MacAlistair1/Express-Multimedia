@section('title')
    {{ $title }}
@endsection
@extends('layouts.app')

@section('content')
    
<!--  get in touch section -->
<section class="xs-get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="get-in-touch-cont text-center">
                    <h3><span class="light-text">Get</span> in touch</h3>
                    <p>Remember Us for every IT related solutions</p>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End get in touch section -->
<!--  contact section -->
<section class="xs-contact-sec">
    <div class="container">
            @include('includes.message')
        <div class="row">
            <div class="col-lg-7">
                <div class="xs-form-group">
                    <form action="/user-message" method="POST" class="xs-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="Your name"
                                       id="xs_contact_name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="Your email"
                                       id="xs_contact_email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" class="form-control" name="contact"
                                       placeholder="Your phone number" id="xs_contact_phone" maxlength="15" minlength="10">

                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                       id="xs_contact_subject">
                            </div>
                        </div>

                        <textarea name="message" placeholder="Message" id="x_contact_massage"
                                  class="form-control message-box" cols="30" rows="10" required></textarea>

                        <div class="xs-btn-wraper">
                            <button type="submit" class="xs-btn">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div><!-- col end -->
            <div class="col-lg-5">
                <div class="contact-map">
                    <div style="width: 100%">
                        
                       <iframe src="{{ session('map') }}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
               </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End contact section -->
<!--  contact section -->
<section class="xs-contact-infomation xs-contact-info-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-address"></i>
                    <h4>Visit our office</h4>
                    <span>{{ session('address') }}</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-mail"></i>
                    <h4>Mail us</h4>
                    <a href="mailto:contact@example.com">{{ session('email') }}</a>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>Call us</h4>
                    <span>{{ session('tel') }}</span>
                    <span class="text-color">(Mon- fri) at 9:30.am to 5:30pm</span>
                </div><!-- .contact-info-group END -->
            </div>
        </div>
    </div><!-- .container end -->
</section><!-- End contact section -->
@endsection