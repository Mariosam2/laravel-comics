@extends('layout.app')
@section('main-content')
<main id="site_main" class="bg_dark-gray">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 g-4 my-3">
            @foreach($comics as $comic)
            <div class="col comic">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="caption py-2">
                    <a href=""><span class="text-uppercase">{{$comic['series']}}</span></a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection