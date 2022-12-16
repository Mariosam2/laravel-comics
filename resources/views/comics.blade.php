@extends('layout.app')
@section('main-content')
<main id="site_main" class="bg_dark-gray">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 gx-4 gy-5 my-3">
            @foreach($comics as $key=>$comic)
            <div class="col comic">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="caption py-2">
                    <a href="/comics/{{$key}}"><span class="text-uppercase">{{$comic['series']}}</span></a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection