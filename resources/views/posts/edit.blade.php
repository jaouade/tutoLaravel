@extends('default')


@section('content')
    <h1 class="header"> Edit this artice whit id:{{$post->id}}</h1>
    {!! Form::open(["method"=>"PUT",'url'=>route('news.update',$post)]) !!}
    <div class="form-group">
        {!! Form::label('title','Titre') !!}
        {!! Form::text('title', $post->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug', $post->slug,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('content','Content') !!}
    {!! Form::textarea('content', $post->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <label>
            {!! Form::checkbox('online',1, $post->online) !!}
            Put it online
        </label>

    </div>


    <input type="submit" class="btn btn-block btn-primary">
    {!! Form::close()!!}

@stop