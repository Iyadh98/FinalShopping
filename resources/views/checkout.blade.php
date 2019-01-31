@extends('layouts.app2')
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/leaf.png')}}"/>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

/*        input[type=text] {
            border: 2px solid red !important;
            border-radius: 4px !important;
        }
*/
        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Title Page -->
    <br>

<form method="post" action="{{ action('CommandeController@addPost') }}">
    @csrf
     <div class="row">
        <div class="col-75">
            <div class="container" style="background-color:white; width:50%; ">
                    <h3 class="m-text20 p-b-24" align="center">Vos informations personnelles</h3>
                    <table class="table" width="100">
                        <col width="70">
                        <col width="10">
                        <tr>
                            <td><i class="fa fa-user"></i> Nom et prénom</td>
                            <td>{{Auth::user()->prenom}} {{Auth::user()->nom}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope"></i> Email</td>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-phone"></i> Numéro de téléphone</td>
                            <td>{{Auth::user()->telephone}}</td>
                        </tr>
                        <tr>
                            <td><label for="adresse"><i class="fa fa-address-card-o"></i> Adresse</label></td>
                            <td><input type="text" name="adresse"  placeholder="Veuillez indiquer l'adresse de la livraison" style="width:100%;" required></td>
                        </tr>
                        <tr>
                            <td><label for="codePostal"><i class="fa fa-address-card-o"></i> Code postal</label></td>
                            <td><input type="text" name="codePostal" placeholder="Veuillez indiquer votre code postal" required style="width:100%;"></td>
                        </tr>
                    </table>
            </div>
                <br>



                <div class="container" style="background-color:white;">
                    <h3 class="m-text20 p-b-24" align="center">Votre commande</h3>
                    <table class="table-shopping-cart" >
                        <col width="10">
                        <col width="10">
                        <col width="10">
                        <col width="10">
                        <col width="10">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Produit</th>
                            <th class="column-3">Prix</th>
                            <th class="column-4">Quantité</th>
                            <th class="column-5">Total</th>
                        </tr>
                        @foreach(Basket::contents() as $produit)
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-2 o-f-hidden">
                                    <img src="{{asset('/images/produits/'.$produits->find($produit->id)->image)}}" alt="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-2">{{$produit->name}}</td>
                            <td class="column-3">{{$produit->price}}</td>
                            <td class="column-4">{{$produit->quantity}}</td>
                            <td class="column-5">{{$produit->price*$produit->quantity}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

                        <span class="m-text21 w-size20 w-full-sm">
						{{Basket::total(false)}}
					</span>
                    </div>

                </br>
                    <input type="submit" value="Passer la commande" class="btn" style="background-color:#243E36 !important;">
            </div>
        </div>
     </div>
                </form>
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
