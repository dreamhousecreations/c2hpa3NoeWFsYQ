@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-5">
            <div class="card card-default">
                <div class="card-header">Classroom - {{$classroom->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <b>Topics:</b>
                    <ol>
                        @foreach($classroom->topics as $topic)
                        <li>{{$topic->name}}</li>
                            @foreach($classroom->subtopics as $subtopic)
                                @if($subtopic->topic_id === $topic->id)
                                    - {{$subtopic->name}} <br>
                                @endif
                            @endforeach
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-default">
                <div class="card-header">Seamless Systematic Task Force</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card card-default">
                                <div class="card-header">Course Information</div>

                                <div class="card-body">

                                    This book is written by P William Jones.
                                    This is a very interesting book. Every one must read it.    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
