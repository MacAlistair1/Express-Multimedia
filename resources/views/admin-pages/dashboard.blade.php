@section('title')
    {{ $title }}
@endsection
@extends('layouts.admin')

@section('content')
@include('includes.message')

<div class="container">
        <div class="row justify-content-center">
             
                <div class="col-md-3">
                        <div class="card card-pricing card-raised">
                            <a href="/admin/update-site-info">
                            <div class="card-content">
                            <h6 class="category"> <img src="{{ asset('img/change.png') }}" alt="Update" style="width:110px;"></h6>
                                <h3 class="card-title" style="margin-top:-1%;">Update Site Information</h3>
                            </div>
                            <hr style="margin-top:-6%;">
                            </a>
                            <a href="/admin/user-message">
                                    <div class="card-content">
                                    <h6 class="category"> <img src="{{ asset('img/message.jpg') }}" alt="Message" style="width:100px;"></h6>
                                    <h3 class="card-title" style="margin-top:-0.3%;">See User Message</h3>
                                    </div>
                                    </a>
                        </div>
                    </div>

                <div class="col-md-3">
                        <div class="card card-pricing card-raised">
                            <a href="/admin/add-news">
                            <div class="card-content">
                                <h6 class="category"> <img src="{{ asset('img/news.png') }}" alt="News" style="width:110px;"></h6>
                                <h3 class="card-title" style="margin-top:-1%;">Add New News</h3>
                            </div>
                            <hr>
                            </a>
                            <a href="/admin/add-project">
                                    <div class="card-content">
                                        <h6 class="category"> <img src="{{ asset('img/project.png') }}" alt="Project" style="width:110px;"></h6>
                                        <h3 class="card-title" style="margin-top:-0.5%;">Add New Project</h3>
                                    </div>
                                    </a>
                        </div>
                    </div>
            
                    <div class="col-md-3">
                            <div class="card card-pricing card-raised">
                                <a href="/admin/all-news">
                                <div class="card-content">
                                <h6 class="category"> <img src="{{ asset('img/manage.png') }}" alt="Manage" style="width:110px;"></h6>
                                    <h3 class="card-title" style="margin-top:-1%;">Manage News</h3>
                                </div>
                                <hr>
                                </a>
                                <a href="/admin/all-project">
                                        <div class="card-content">
                                        <h6 class="category"> <img src="{{ asset('img/manage.png') }}" alt="Manage" style="width:110px;"></h6>
                                        <h3 class="card-title" style="margin-top:-0.5%;">Manage Projects</h3>
                                        </div>
                                        </a>
                            </div>
                        </div>
        </div>
    </div>

@endsection