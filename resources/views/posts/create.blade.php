@extends('default')


@section('content')
    <h1 class="header"> Add an article</h1>
    {!! Form::open(['url'=>route('news.store')]) !!}
    <div class="form-group">
        {!! Form::label('title','Titre') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Content') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>


    <input type="submit" class="btn btn-block btn-primary">
    {!! Form::close()!!}

@stop