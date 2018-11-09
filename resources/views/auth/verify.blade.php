@extends('layouts.app')
@section('title')
    Verify
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        html {
            height: 100%;
        }
        * {
            margin: 0;
            padding: 0;
        }
        body {
            font: normal .80em 'trebuchet ms', arial, sans-serif;
            background: #FFF;
            color: #555;
        }
        p {
            padding: 0 0 20px 0;
            line-height: 1.7em;
        }
        img {
            border: 0;
        }

        .center-text {
            text-align: center;
            vertical-align: middle;
        }
        /* LOGIN-FORM */
        section#loginBox {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 0 4px rgba(0, 0, 0, 0.2);
            margin: 40px auto; /*aligns center*/
            padding: 24px;
            width: 350px;
        }
        form.minimal label {
            display: block;
            margin: 6px 0;
        }
        form.minimal input[type="text"], form.minimal input[type="email"], form.minimal input[type="number"], form.minimal input[type="search"], form.minimal input[type="password"], form.minimal textarea {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(186, 186, 186);
            border-radius: 2px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
            display: block;
            font-size: 14px;
            margin: 6px 0 12px 0;
            padding: 8px;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
            width: 90%;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            -o-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        form.minimal input[type="text"]:focus, form.minimal input[type="email"]:focus, form.minimal input[type="number"]:focus, form.minimal input[type="search"]:focus, form.minimal input[type="password"]:focus, form.minimal textarea:focus, form.minimal select:focus {
            border-color: #4195fc;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
            color: rgb(0, 0, 0);
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/slick-custom.js')}}"></script>

    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/sweetalert/sweetalert.min.js')}}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection
