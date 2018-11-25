@extends('layouts.app2')
@section('title')
    Profile
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
        th{
            font-size:2em !important;
        }
        td{
            font-size: 2em !important;
        }
    </style>
@endsection




@section('content')
<h1 align="center">Bienvenue {{Auth::user()->prenom}}! </h1>
    <div align="center">
        <p align="center" id="point" >Votre score est: {{Auth::user()->score}}</p>
        <h2>Commandes effectuées:</h2>
    </div><tr class="table-active">...</tr>

    <table class="table" style="width:100% !important;">
        <thead>
        <tr>
            <th>Commande ID</th>
            <th>Date commande</th>
            <th>Montant</th>
            <th>Etat</th>
        </tr>
        </thead>
        <tbody>
        <!--    IF ETAT==1 (en cours) tr class="warning"
                IF ETAT==2 (prete)    tr class="success"
                IF ETAT==3 (livree)   tr class="info"
                IF ETAT==0 (annulee)  tr class="danger"
        -->
        @if(count($commande) > 0)
            @foreach($commande as $commandes)
                @if(Auth::user()->id==$commandes->users_id)
                    @if($commandes->etat==1)
            <tr class="warning">
                    @elseif($commandes->etat==2)
            <tr class="success">
                    @elseif($commandes->etat==3)
            <tr class="info">
                    @elseif($commandes->etat==0)
            <tr class="danger">
                    @endif
            <td>$commandes->commande_id</td>
            <td>$commandes->date</td>
            <td>$commandes->montant</td>
            <td>$commandes->etat</td>
        </tr>
            @endif
            @endforeach
            @endif
        </tbody>
    </table>
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
        function adddisp(){
            if(document.getElementById("nombre").style.display=="none")
            document.getElementById("nombre").style.display="inline";
            else document.getElementById("nombre").style.display="none";
        }
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
