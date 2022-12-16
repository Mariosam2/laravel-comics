@extends('layout.app')

@section('main-content')

<main id="site_main">
    <section class="bg-primary">
        <div class="container">
            <img src="{{$comics[$index]['thumb']}}" alt="">
        </div>
    </section>

</main>

@endsection