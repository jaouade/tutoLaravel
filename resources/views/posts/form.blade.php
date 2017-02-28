<?php
    if ($post->id){
        $options =["method"=>"PUT",'url'=>action('PostsController@update',$post)];
    }else{
        $options =["method"=>"POST",'url'=>action('PostsController@store')];
    }

    ?>


@include('posts.errors')

    {!! Form::model($post,$options) !!}
    <div class="form-group">
        {!! Form::label('title','Titre') !!}
        {!! Form::text('title', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',$categories, null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tags_list[]','Tags') !!}
        {!! Form::select('tags_list[]',App\Tag::lists('name','id'),null,['class'=>'form-control','multiple'=>true]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Content') !!}
        {!! Form::textarea('content', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <label>
            {!! Form::checkbox('online',1) !!}
            Put it online
        </label>

    </div>


    <input type="submit" class="btn btn-block btn-primary">
    {!! Form::close()!!}