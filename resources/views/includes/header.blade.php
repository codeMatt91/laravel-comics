@php
$navs = config('navs');
@endphp

<header>
    <div class="container">
        <div id="logo">
            <figure>
                <a href="#"><img src="{{asset('images/dc-logo.png')}}" /></a>
            </figure>
        </div>
        <nav>
            <ul>
                @foreach($navs as $nav)
                <li>
                    <a href="{{ $nav['url'] }}">{{ $nav['name'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>