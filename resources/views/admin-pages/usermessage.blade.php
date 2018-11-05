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
                        <div class="card-header lead">Manage All Messages</div>
                    <div class="card-body">
                            @if (count($messages) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Name of Sender</th>
                                    <th>E-mail</th>
                                    <th>Contact</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                               
                                  
                                    @foreach ($messages as $message)
                                    <tr>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->contact }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>
                                            {!! Form::open(['action' => ['UserMessageController@destroy', $message], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                    </td>
                                    </tr>
                                    @endforeach                               
                                   @else
                                       <h3>Message Not Found!</h3>
                                   @endif
                                   @if (count($messages) > 3)
                                   <tr>
                                        <td>{{ $messages->links() }}</td>
                                    </tr>
                                   @endif
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection