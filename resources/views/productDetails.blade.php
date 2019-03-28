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
    <style>
        .unsubscribe{
            margin-top:50px;

        }
        .email{
            width: 20%;
        }
        .testing{
            word-wrap: break-word;
        }
        .imageProd,.descProd{
            display: inline-block;
        }
        .descProd{


        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {

            opacity: 1;

        }
    </style>
@endsection

@section('content')






    <!-- Page Content -->
    <div class="container">
    @if(count($produit)>0)
        @foreach($produit as $pr)

        <h1 class="my-4">{{$pr->nom}}
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('images/produits/'.$pr->image)}}" alt="" style="width:750px;height: 500px;">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Description</h3>
                <p class="testing">{{$pr->description}}</p>
                <h3 class="my-3">Prix</h3>
                <p>{{$pr->prix}}TND</p>
                <form method="get"
                      action="{{action('ProduitController@addCart', ['id'=>$pr->produit_id,'nom'=>$pr->nom, 'prix'=>$pr->prix])}}">

                    <br>
                    <div><label for="quantite"
                                class=" form-control-label">Quantité:</label>
                    </div>
                    <div><input type="number" name="quant" value="1"
                                class="input-group form-control" width="10"></div>


                    <button type="submit" style="margin-left:100px;"
                            class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Ajouter au panier
                    </button>

                </form>
            </div>


        </div>
        <!-- /.row -->

            @endforeach
        @endif

    </div>
    <!-- /.container -->





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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{URL::asset('js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection