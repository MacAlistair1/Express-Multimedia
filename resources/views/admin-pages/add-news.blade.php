@section('title')
    {{ $title }}
@endsection
@extends('layouts.admin')

@section('content')
@include('includes.message')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                        <div class="card-header lead">Add New News</div>
                    <div class="card-content">
                        {!! Form::open(['action' => 'NewsAndUpdateController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                        <div class="form-group">
                        {{ Form::label('title', "News Title", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'News Title', 'style' => 'color:black;']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('detail', "News Details", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                            {{ Form::textarea('detail', '', ['class' => 'form-control', 'placeholder' => 'Explain News in Detail', 'id' => 'article-ckeditor', 'style' => 'color:black;']) }}
                        </div>
                        <div class="input-group">  
                            {{ Form::label('img', "Picture for News", ['style' => 'color:black;font-weight:bold;']) }}
                            {{ Form::file('image') }}
                                </div>
                        {{ Form::submit('Add', ['class' => 'btn btn-primary btn-lg']) }}   
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
