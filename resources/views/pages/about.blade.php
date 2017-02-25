@extends("default")
@section('title',$about)
@section("content")

    <h1>{{$about}}</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At delectus, dolorum ea excepturi fugit ipsa ipsum, laboriosam, magnam obcaecati ratione repudiandae tempore vero. Doloribus earum laborum voluptatem! Aut, nobis repellendus?</p>
    <ul>
        @forelse($numbers as $number)
            <li>{{$number}}</li>
        @empty
            <li>aucun chiffre</li>
        @endforelse

    </ul>


@endsection

@section("sidebar")
    <h2>coool</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolorem magnam omnis qui voluptas? Deleniti dolores, eum fugit </p>

@endsection