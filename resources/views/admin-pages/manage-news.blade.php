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
                        <div class="card-header lead">Manage News</div>
                        <div class="card-body">
                                @if (count($news) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                        <th>Publish Date</th>
                                        <th></th>
                                    </tr>
                                   
                                      
                                        @foreach ($news as $item)
                                        <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! $item->detail !!}</td>
                                        <td>{{ $item->publish_date }}</td>
                                        <td>
                                                {!! Form::open(['action' => ['NewsAndUpdateController@destroy', $item], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                        </td>
                                        </tr>
                                        @endforeach                               
                                       @else
                                           <h3><center>News Not Found!</center></h3>
                                       @endif
                                       <tr>
                                            <td>{{ $news->links() }}</td>
                                        </tr>
                                </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection