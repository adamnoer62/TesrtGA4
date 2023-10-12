<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MJQBVX8G7N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MJQBVX8G7N');
        gtag('event', 'sahamaneh');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KRW2L517S5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KRW2L517S5');
    </script>

    <!-- Google tag (gtag.js) -->
    {{--  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GHN8BSPZZC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GHN8BSPZZC');
        gtag('event', 'cobain_ajah');
    </script>  --}}

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TXSH9Q66');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <div class="content">
            <div class="title m-b-md">
                Halaman 1
            </div>
            <a class="btn btn-primary" href="https://www.youtube.com/" id="cobain">Klik
                disini</a>
            <a class="btn btn-primary" href="http://example.com/" id="test">halaman disini</a>
            <a class="btn btn-primary" href="http://exaasdsadasdmple.com/" id="test">halasssman disini</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary-modal" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            saddasdas
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="inimodal"
                                onclick="trackSaveChangesClick()">Close</button>
                            <button type="button" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="links">
                <a href="{{ route('halaman1') }}">Halaman1</a>
                <a href="{{ route('halaman2') }}">Halaman2</a>
                <a href="{{ route('halaman3') }}">Halaman3</a>
                <a href="{{ route('halaman4') }}">Halaman4</a>
            </div>
        </div>
    </div>

</body>

<script>
    window.addEventListener('click', function(event) {
        if (event.target.tagName === "A") {
            // Periksa apakah URL mengarah ke YouTube
            if (event.target.href.includes("https://www.youtube.com/")) {
                return; // Jika mengarah ke YouTube, hentikan event
            }

            // Jika bukan menuju ke YouTube, lakukan pelacakan seperti biasa
            gtag('event', 'click_link', {
                'link_text': event.target.innerText,
                'link_url': event.target.href,
                'link_id': event.target.id,
                'link_classes': event.target.className,
                'test_variable': '{{ $coba }}'
            });
        }

        console.log('event');
    });
</script>
<script>
    window.addEventListener('click', function(event) {
        if (event.target.tagName === "A") {
            // Periksa apakah URL mengarah ke YouTube
            if (event.target.href.includes("youtube.com")) {
                return; // Jika mengarah ke YouTube, hentikan event
            }

            // Jika bukan menuju ke YouTube, lakukan pelacakan seperti biasa
            gtag('event', 'click_ini', {
                'link_text': event.target.innerText,
                'link_url': event.target.href,
                'link_id': event.target.id,
                'link_classes': event.target.className,
                'test_variable': '{{ $coba }}'
            });
        }

        console.log('event');
    });
</script>
<script>
    function trackSaveChangesClick() {
        gtag('event', 'modal', {
            'link_text': event.target.innerText,
            'link_url': event.target.href,
            'link_id': event.target.id,
            'link_classes': event.target.className,
            'test_variable ': '{{ $coba }}'
        });
    }
</script>
<script>
    window.addEventListener('beforeunload', function(e) {
        // Menampilkan pesan konfirmasi saat mencoba keluar halaman
        var confirmationMessage = 'Anda yakin ingin meninggalkan halaman ini?';

        // (Opsi) Ubah pesan konfirmasi sesuai kebutuhan Anda
        // var confirmationMessage = 'Apakah Anda yakin ingin keluar?';

        // Set pesan konfirmasi
        e.returnValue = confirmationMessage;
        return confirmationMessage;
    });
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

< /html>
