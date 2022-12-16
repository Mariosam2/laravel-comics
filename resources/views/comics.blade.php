@extends('layout.app')
@section('main-content')
<main id="site_main" class="bg_dark-gray text-white">
    <div class="container">
        <span class="text-uppercase fw-semibold text-white bg-primary px-3 py-2 jumbo-tag fs-5">current series</span>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 gx-4 py-5">
            @foreach($comics as $key=>$comic)
            <div class="col comic">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="caption py-2">
                    <a href="/comics/{{$key}}"><span class="text-uppercase">{{$comic['series']}}</span></a>
                </div>

            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary text-uppercase text-white my-4 rounded-0 fw-semibold px-3 w-25 py-2">load more</button>
        </div>
    </div>
</main>
@endsection