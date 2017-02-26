@extends('default')


@section('content')
    <h1>Racourcir un nouveau lien</h1>
    <form action="{{route('link.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <div class="form-group">
            <label for="url">lien a racourcir</label>
            <input class="form-control" name="url" id="url" placeholder="https:://....">
        </div>
       <input type="submit" value="do it" class="btn btn-block btn-primary">
    </form>

@endsection