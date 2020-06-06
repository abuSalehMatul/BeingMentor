<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->

    <style>
       #mainArticle{
            position: absolute;
            top: 30%;
            left: 35%;
            font-weight: 700;
            border: 1px solid gainsboro;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 15px;
            background: #2574C1;
            color: #ffffff;
       } 
       #footerdiv{
           position: relative;
           top: 100%;
       }
    </style>

    <title>{{ config('app.name', 'Being Mentor') }}</title>
    <!-- Styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <script src="https://kit.fontawesome.com/89ffdc35e7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('wp-content/uploads/2020/04/cropped-logo-4-270x270.png')}}" />
    <link rel="stylesheet" id="et-core-unified-tb-3941-4026-cached-inline-styles" href="{{asset('wp-content/et-cache/4026/et-core-unified-tb-3941-4026-15905294737853.min.css')}}" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CUbuntu%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%7CABeeZee%3Aregular%2Citalic&amp;ver=5.4#038;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href="{{asset('wp-includes/css/dist/block-library/style.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href="{{asset('wp-content/themes/Divi/stylec1f9.css?ver=4.4.2')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='supreme-modules-pro-for-divi-styles-css' href="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/styles/style.min91ac.css?ver=2.6.8')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href="{{asset('wp-includes/css/dashicons.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp')}}"></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/es6-promise.auto.minc225.js?ver=5.4.1')}}"></script>

</head>

<body class="page-template-default page page-id-4026 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css" id="">
    <div id="page-container">
        <div id="et-boc" class="et-boc">
            <div style="background: #2574C1;">
            @include('layouts.topbar')
            </div>
            <!-- #main-header -->
            <div id="et-main-area">
                <div id="main-content">
                    <article id="mainArticle" class="post-4026 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="card col-md-8 offset-2 pay-pal-info">
                                <h3 style="color: #ffffff">Package Name: <b class="badge badge-info"> {{$package->name}} </b></h3>
                                <h6 style="color: #ffffff"> Duration: <b>{{$package->duration}} </b> Months</h6>
                                <h6 style="color: #ffffff"> price: <b> ${{$package->price}}</b> </h6>
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
                        </div>
                        
                    </article>
                    
                </div>
                
            </div>
        </div>
    </div>
   
   
    <div>
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
