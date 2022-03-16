@php
$socials = config('db_footer')
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <div id="links">
                <div class="list">
                    <h3>Title</h3>
                    <ul>
                        <li>testo nel footer</li>
                    </ul>
                </div>
            </div>
            <div class="logo">
                <figure>
                    <img src="{{asset("../images/dc-logo-bg.png")}}" alt="Logo dc" />
                </figure>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div id="button">
                <button><a href="#">SIGN-UP NOW!</a></button>
            </div>
            <div id="social">
                <h4>FOLLOW US</h4>
                <ul>
                    @foreach($socials as $social)
                    <li>
                        <img src="{{asset("images/" . $social['url'])}}" alt="{{$social['name']}}">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>