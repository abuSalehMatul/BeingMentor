<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chose Form</title>
    <!-- Styles -->
    <link href="{{ asset('css/adminator.css') }}" rel="stylesheet">
    @yield('css')
    <style>
        .choseSelect {
            padding: 30px;
            margin: 10px;
            align-content: flex-start;
            color: blueviolet;
            font-size: 40px;
            font-style: italic;
            font-stretch: semi-expanded;
        }

        .choseSelect option {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-style: italic;
            background: orange;
            color: black;
        }
    </style>
</head>

<body class="app">
    <div id="app">
        <div id='loader'>
            <div class="spinner"></div>
        </div>

        <script>
            window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
        </script>
        <div class="peers ai-s fxw-nw h-100vh">
            <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
                style='background-image: url("{{asset("images/cropped-logo-4-192x192.png")}}")'>
                <div class="pos-a centerXY">
                </div>
            </div>
            <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
                <div class="mB-40">
                    <img src="{{asset('/images/cropped-logo-4-192x192.png')}}" alt="Rate hammer">
                </div>
                <form method="post" action="{{url('register/step-one')}}">
                    @csrf()
                    <h4> You Are Registering as a ? </h4>
                    <select class="choseSelect" name="user_type">
                        <option value="mentor"> As a Mentor </option>
                        <option value="trainee"> As a Trainee </option>
                    </select>
                    <input type="submit"
                        style="padding: 12px;float: right;background: red;color: white;font-size: 20px;border: 1px solid black;border-radius: 20px;"
                        value="Register">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
