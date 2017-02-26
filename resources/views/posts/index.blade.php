@extends('default')


@section('content')
    <div class="row">
    @forelse($posts as $post)

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-thumbnail" src="http://www.levensboompaden.nl/images/FireLetter5.jpg" width="200px" height="200px"alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">{{$post->content}}</p>
                        <a href="{{route('news.edit',$post)}}" class="btn btn-primary">See and edit the article</a>
                    </div>
                </div>
            </div>



    @empty
    </div>

            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-thumbnail" src="http://www.levensboompaden.nl/images/FireLetter5.jpg" width="200px" height="200px" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">nothing articles for the moment</h4>
                        <p class="card-text text-danger">no content</p>
                        <a href="#" class="btn btn-primary" disabled="">nothing to see here</a>
                    </div>
                </div>
            </div>



    @endforelse


    @stop