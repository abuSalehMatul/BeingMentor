<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{$website->logo}}" />


    <title>{{ config('app.name', 'Mentor') }} - @yield('title')</title>
    <!-- Styles -->
    <link rel='stylesheet' id='wp-block-library-css' href="{{asset('customStyle/style.min91d5.css?ver=5.4')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    {{-- <link href="{{asset('customStyle/anymate.css')}}"> --}}
    <link rel='stylesheet' id='divi-style-css' href="{{asset('customStyle/stylec1f9.css?ver=4.4.2')}}" type='text/css' media='all' />
    <link href="{{ asset('customStyle/style.css') }}" rel="stylesheet">
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CUbuntu%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%7CABeeZee%3Aregular%2Citalic&amp;ver=5.4#038;subset=latin,latin-ext' type='text/css' media='all' />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('customStyle/myStyle.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @yield('css')

</head>

<body class="" id="">
    <div>
        <!-- @App Content -->
        <!-- =================================================== -->
        <div class="et-db et_fixed_nav et_header_style_left et_primary_nav_dropdown_animation_fade et_smooth_scroll et_transparent_nav">
            <!-- #Main ============================ -->
            <div class="page-container et-boc">
                <!-- ### $Topbar ### -->
                @include('layouts.topbar')

                <div id='mainContent'>
                    <article id="post-9" class="post-9 page type-page status-publish hentry">

                        <div class="card col-md-8 offset-2 pay-pal-info">
                            <h3>Package Name: <b class="badge badge-info"> {{$package->name}} </b></h3>
                            <h6> Duration: <b>{{$package->duration}} </b> Months</h6>
                            <h6> price: <b> ${{$package->price}}</b> </h6>
                        </div>
                        <div class="entry-content card pay-pal-info offset-2 col-md-8">
                            <div class="et-l et-l--post">
                                <div class="flex-center position-ref full-height">
                                    <div class="content">
                                        Please Checkout with:
                                        <div class="links">
                                            <div id="paypal-button"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                   
                </div>
            </div>
        </div>


        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
            paypal.Button.render({
                env: 'sandbox', // Or 'production'
                style: {
                    size: 'large'
                    , color: 'gold'
                    , shape: 'pill'
                , },
                // Set up the payment:
                // 1. Add a payment callback
                payment: function(data, actions) {
                    // 2. Make a request to your server
                    return actions.request.post('/api/create-payment')
                        .then(function(res) {
                            // 3. Return res.id from the response
                             console.log(res);
                            return res.id;
                        });
                },
                // Execute the payment:
                // 1. Add an onAuthorize callback
                onAuthorize: function(data, actions) {
                    // 2. Make a request to your server
                    return actions.request.post('/api/execute-payment', {
                            paymentID: data.paymentID
                            , payerID: data.payerID
                        })
                        .then(function(res) {
                            console.log(res);
                            alert('PAYMENT WENT THROUGH!!');
                            // 3. Show the buyer a confirmation message.
                        });
                }
            }, '#paypal-button');

        </script>
        <script src="{{ asset('js/app.js') }}" defer></script>

    </div>
</body>

</html>
