 

@section('content')

<!-- Jumbotron  -->
<div class="jumbotron">
    <figure>
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="logo jumbotron">
    </figure>
</div>

<!-- Section Main-Series  -->
<div class="main-series">
    <div class="container">
        @foreach($films as $film)
        <div class="card-serie">
            <img src="{{ $film['thumb'] }}" alt="serie.type" />
            <h5> {{ $film['title'] }}}</h5>
        </div>
        @endforeach
        <div class="load"><button>LOAD MORE</button></div>
    </div>
</div>

<section id="shop">
    <div class="container">
        <div class="card-img">
            <figure>
                <div class="immagine">
                    <img src="" alt="card.description" />
                </div>
                <div class="text">Testo</div>
            </figure>
        </div>
    </div>
</section>

@endsection