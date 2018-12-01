@extends('layouts.app2')
@section('title')
About
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
@endsection

@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/icons/1.png);">
    <h2 class="l-text2 t-center">
        <!--About-->
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-b-30">

                <p class="p-b-28">
                    <h2 align="center">Nature Bio</h2>
                    Boutique de produits Naturels, Bio et Artisanaux EXCLUSIVEMENT EN LIGNE. Et vous propose des produits de qualité, labellisés.

                    Naturebio.com.tn est aujourd'hui le spécialiste en Tunisie dans la vente en ligne de produits naturels, biologiques et artisanaux avec plusieurs références.
                    Les produits Bio sélectionnés par Naturebio.com.tn sont des produits issus de l’agriculture biologique en Tunisie. Le Bio est donc un retour à la tradition, à une agriculture et à un élevage qui respectent l’équilibre de la terre et qui utilisent les ressources qu’elle nous donne sans la polluer ni l’épuiser.
                    Notre objectif est d'aider les personnes qui veulent vivre autrement à accéder à ce type de produits, où qu’ils soient, partout en Tunisie. Nos produits sont à votre disposition 24h/24 sur notre site et livrés par la Poste ou par tierce personne (transporteur, livreur, etc.).
                <h2>NATUREBIO, C'EST UNE EQUIPE!</h2>
                Naturebio.com.tn, c’est une équipe motivée et dynamique. Son défit, est de faire de Naturebio.com.tn  la référence en produits naturels et Bio en Tunisie! Naturebio.com.tn  a comme ambition de vous fournir une grande diversité de produits en vous assurant un service de qualité et d’écoute.
                NOS ENGAGEMENTS AU QUOTIDIEN:
                <br>
                <b>Choix varié</b>
                <br>
                •	Des produits pour toute la famille
                <br>
                •	Des produits qui conviennent à différents moments de la journée
                <br>
                •	Des produits certifiés Bio
                <br>
                •	Des produits de qualité, sélectionnés auprès de professionnels sérieux qui aiment leur métier
                <br>
                <b>Hyper service</b>
                <br>
                •	Préparation et expédition express de  toute commande passée avant 11 heures est expédiée le jour même (du lundi au vendredi, sous réserve de validation du paiement)!
                <br>
                •	Pas de  montant minimum d’achat!
                <br>
                Venez découvrir le goût, les saveurs et l’authenticité des produits que nous avons sélectionnés pour vous. N’attendez plus, visitez www.Naturebio.com.tn . Faites vos courses et faites-vous livrer vos produits dans le bureau de poste le plus proche de vous, essayez-les tranquillement, en famille, et dites-nous ce que vous en pensez.!
                <h2>SERVICE CLIENT</h2>
                Du lundi au vendredi de 07h à 20h
                <br>
                Téléphone : 58
                <br>
                Email : clients@naturebio.com

                </p>
            </div>
        </div>
    </div>
</section>
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

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="{{URL::asset('js/main.js')}}"></script>
@endsection
