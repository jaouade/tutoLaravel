@extends('default')


@section('content')
    <h1>bravo !!!</h1>
    <p>
        <a target="_blank" class="btn btn-block btn-danger" href="{{route('link.show',$link)}}">
            {{route('link.show',$link)}}
        </a>
    </p>

@endsection