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
                        <div class="card-header lead">Manage Projects</div>
                        <div class="card-body">
                                @if (count($projects) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Client</th>
                                        <th>Value</th>
                                        <th></th>
                                    </tr>
                                   
                                      
                                        @foreach ($projects as $project)
                                        <tr>
                                        <td>{{ $project->name }}</td>
                                        <td>{!! $project->detail !!}</td>
                                        <td>{{ $project->p_date }}</td>
                                        <td>{{ $project->location }}</td>
                                        <td>{{ $project->client }}</td>
                                        <td>{{ $project->value }}</td>
                                        <td>
                                                {!! Form::open(['action' => ['ProjectController@destroy', $project], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                        </td>
                                        </tr>
                                        @endforeach                               
                                       @else
                                           <h3><center>Project Not Found!</center></h3>
                                       @endif
                                       <tr>
                                            <td>{{ $projects->links() }}</td>
                                        </tr>
                                </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection