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

<div id="info">
    <div class="container-sm">
        <div id="talent">
            <div class="row">
                <div class="col title">
                    <h3>Talent</h3>
                </div>
                <div class="col">
                    <div id="first">Art by:</div>
                    <div id="second">
                        @foreach($film['artists'] as $artist)
                            <span>{{ $artist }},</span>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div id="first">Written by:</div>
                    <div id="second">
                        @foreach($film['writers'] as $writers)
                            <span>{{ $writers }},</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="specs">
            <div class="row">
                <div class="col title">
                    <h3>Specs</h3>
                </div>
                <div class="col">
                    <div id="first">Series:</div>
                    <div id="second">{{strtoupper($film['type'])}}</div>
                </div>
                <div class="col">
                    <div id="first">U.S.Price:</div>
                    <div id="second">{{$film['price']}}</div>
                </div>
                <div class="col">
                    <div id="first">On Sale Date:</div>
                    <div id="second">{{$film['price']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection