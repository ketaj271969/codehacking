@extends('layouts.blog-post')

@section('content')

    <h1>Post</h1>

    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{$post->photo->file}}" alt="">



    <!-- Post Content -->
    <p>{{$post->body}}</p>

    <hr>

    @if(Session::has('comment_message'))
        {{session('comment_message')}}
    @endif

    <!-- Comments Form -->
@if(Auth::check())
    <div class="well">
        <h4>Leave a Comment:</h4>
        {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store']) !!}
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>3]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit comment',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endif

    @if(count($comments) > 0 )
        @foreach($comments as $comment)
            <div class="media">
                <a class="pull-left" href="#">
                    <img height="64" class="media-object" src="{{$comment->$photo}}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
                </div>
            </div>

        @endforeach

    @endif


@stop