@section('title')
    {{ $title }}
@endsection

@extends('layouts.admin')

@section('content')
@include('includes.message')
<div class="container">
        <div class="row">
                <div class="col-md-10">
                        <div class="card">
                                <div class="card-header small"><h1>{{ $site->site_name }}</h1></div>
                                        <hr>
                                <div class="card-content">
                                        {!! Form::open(['action' => ['SiteInfoController@update', $site], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', "Site Name", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('site_name', $site->site_name, ['class' => 'form-control lead', 'placeholder' => 'Site Name', 'style' => 'color:black;']) }}
                                         </div>
                                        <div class="form-group">
                                            {{ Form::label('tel', "Contact", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                            {{ Form::text('tel', $site->tel ,['class' => 'form-control', 'placeholder' => 'Contact No.', 'style' => 'color:black;', 'maxlength' => '15', 'minlength' => '10']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('tel', "Address", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('address', $site->address ,['class' => 'form-control', 'placeholder' => 'Company Address', 'style' => 'color:black;']) }}
                                            </div>
                                        <div class="form-group">
                                                {{ Form::label('email', "E-mail", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('email', $site->email ,['class' => 'form-control', 'placeholder' => 'E-mail', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('map', "Map", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('map_url', $site->map_url, ['class' => 'form-control', 'placeholder' => 'Map URL', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('map', "Facebook URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('fb_url', $site->fb_url, ['class' => 'form-control', 'placeholder' => ' Facebook URL', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('map', "Twitter URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('twitter_url', $site->twitter_url, ['class' => 'form-control', 'placeholder' => ' Twitter URL', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('map', "Google Plus URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('gplus_url', $site->gplus_url, ['class' => 'form-control', 'placeholder' => ' Google Plus URL', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('map', "Instagram URL", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::text('insta_url', $site->insta_url, ['class' => 'form-control', 'placeholder' => ' Instagram URL', 'style' => 'color:black;']) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('about', "About Site", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::textarea('about_us', $site->about_us, ['class' => 'form-control', 'placeholder' => 'About Company', 'id' => 'article-ckeditor', 'style' => 'color:black;']) }}
                                        </div>
                                       
                                        
                                        <div class="input-group">  
                                                {{ Form::label('logo', "Site Logo", ['style' => 'color:black;font-weight:bold;']) }}
                                                {{ Form::file('logo') }}
                                        </div>
                                         </div>
                                        {{ Form::hidden('_method', 'PUT') }}
                                        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}   
                                        {!! Form::close() !!}
                                </div>
                        </div>
                </div>
        </div>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection