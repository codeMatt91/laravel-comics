<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>DC Comics</title>
</head>

<body>
    @include('includes.header')

    <main>
        @yield('content')
    </main>

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
                        <img src="" alt="Logo dc" />
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
                        <li>
                            <img src="" alt="immage.description">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>