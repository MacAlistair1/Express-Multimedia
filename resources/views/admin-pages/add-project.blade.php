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
                        <div class="card-header lead">Add New Project</div>
                    <div class="card-content">
                        {!! Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
                        <div class="form-group">
                        {{ Form::label('title', "Project Title", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Project Title', 'style' => 'color:black;']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', "Client Name", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                            {{ Form::text('client', '', ['class' => 'form-control', 'placeholder' => 'Client Name', 'style' => 'color:black;']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', "Project Value", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                            {{ Form::text('value', '', ['class' => 'form-control', 'placeholder' => 'Project Value', 'style' => 'color:black;']) }}
                        </div>
                        <div class="form-group">
                                {{ Form::label('title', "Project Date", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                {{ Form::date('p_date', '', ['class' => 'form-control', 'placeholder' => 'Eg. 2018-11-05', 'style' => 'color:black;']) }}
                            </div>
                        <div class="form-group">
                                {{ Form::label('title', "Project Location", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                                {{ Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Project Location', 'style' => 'color:black;']) }}
                            </div>
                        <div class="form-group">
                            {{ Form::label('detail', "Project Details", ['class' => 'lead', 'style' => 'color:black;font-weight:bold;']) }}
                            {{ Form::textarea('detail', '', ['class' => 'form-control', 'placeholder' => 'Explain Project in Detail', 'id' => 'article-ckeditor', 'style' => 'color:black;']) }}
                        </div>
                        <div class="input-group">  
                            {{ Form::label('img', "Project Image", ['style' => 'color:black;font-weight:bold;']) }}
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
