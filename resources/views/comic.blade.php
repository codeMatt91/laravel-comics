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

<div class="information">
    <div class="container-sm">
        <div id="description">
            <h1>{{strtoupper($film['title'])}}</h1>
        </div>
        <div id="advertisement"></div>
    </div>
</div>

@endsection