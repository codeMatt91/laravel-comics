@extends('layout.main')

@section('content')
<!-- Jumbotron  -->
<div class="jumbotron">
    <figure>
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="logo jumbotron">
    </figure>
</div>

<!-- Content img Comic  -->

<div id="base-card">
    <div class="container-sm">
        <figure>
            <div class="banner" id="banner-top">{{strtoupper($film['type'])}}</div>
            <img src="{{ $film['thumb'] }}" alt="{{$film['title']}}">
            <div class="banner" id="banner-bottom">VIEW GALLERY</div>
        </figure>
    </div>
</div>

<!-- Content Description Comic  -->

<div class="container-sm">
    <div class="information">
        <div id="description">
            <h2>{{strtoupper($film['title'])}}</h2>
            <div id="row">
                <div id="wrapper">
                    <div id="price">
                        <span id="local">U.S Price:</span>
                        <span>{{ $film['price'] }}</span>
                    </div>
                    <div id="disponibility">AVAIBLE</div>
                </div>
                <div id="check-avaible"><strong> Check Availability </strong></div>
            </div>

            <p class="plot" >{{ $film['description'] }}</p>
        </div>
        <div id="advertisement">
            <figure>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </figure>
        </div>
    </div>
</div>

@endsection