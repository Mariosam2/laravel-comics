@extends('layout.app')

@section('main-content')

<main id="site_main">
    @if($index <= count($comics)) @php $comic=$comics[$index]; @endphp <section class="bg-primary comic-info">
        <div class="container">
            <div class="thumb">
                <div class="thumb-text-top text-white">comic book</div>
                <img class="position-relative" src="{{$comic['thumb']}}" alt="">
                <div class="thumb-text-bottom text-white">view gallery</div>
            </div>
        </div>
        </section>
        <section class="info">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-8">
                        <h3 class="text-uppercase">{{$comic['title']}}</h3>
                        <p>{{$comic['description']}}</p>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-end">
                        <span class="text-uppercase">advertisment</span>
                        <img class="img-fluid" src="{{Vite::asset('resources/images/comic-info-thumb.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="details bg-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h4>Talent</h4>
                        <ul class="list-unstyled list-group">
                            <li class="list-group-item ms_detail-item">
                                <span class="fw-semibold detail-title">Art by:</span>
                                <div class="artists">@foreach($comic['artists'] as $artist)
                                    {{$artist. ','}}
                                    @endforeach
                                </div>

                            </li>
                            <li class="list-group-item ms_detail-item">
                                <span class="fw-semibold detail-title">Written by:</span>
                                <div class="writers">@foreach($comic['writers'] as $writer)
                                    {{$writer . ','}}
                                    @endforeach
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <h4>Specs</h4>
                        <ul class="list-unstyled list-group">
                            <li class="list-group-item ms_detail-item">
                                <span class="fw-semibold detail-title">Series:</span>
                                <span class="series">{{$comic['series']}}</span>
                            </li>
                            <li class="list-group-item ms_detail-item">
                                <span class="fw-semibold detail-title">U.S. Price:</span>
                                <span class="series">{{$comic['price']}}</span>
                            </li>
                            <li class="list-group-item ms_detail-item">
                                <span class="fw-semibold detail-title">On Sale Date:</span>
                                <span class="series">{{$comic['sale_date']}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="bg-primary comic-info">
            <div class="container h-100 d-flex align-items-center">
                <h1 class="text-white">No comic to display</h1>
            </div>
        </section>
        @endif

</main>

@endsection