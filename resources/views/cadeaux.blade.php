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
        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }
        .modify{
            background-color: white !important;
            color:black !important;
            border-color: white;
        }
        .modify:focus {
            background-color: white !important;
            color:black !important;
            border-color:white !important;
            box-shadow: none !important;
        }
        .modify:hover{
            background-color: white !important;
            color:black !important;
            border-color: white;
        }
        .divChange{
            background-color: white;
            border-color: white;
        }
    </style>
@endsection

@section('content')
    @foreach($images as $image)
        <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
                 style="background-image: url({{asset('images/produits/'.$image->image1)}});">
            <h2 class="l-text2 t-center">
                Produits
            </h2>
            <p class="m-text13 t-center">
                {{$image->descImage7}}
            </p>
        </section>
    @endforeach


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Categories
                        </h4>

                        <ul class="p-b-54">
                            <form method="get" action="{{action('ProduitController@searchSousCategorie')}}">
                                @if(count($categories) > 0)
                                    @foreach($categories as $categorie)
                                        @if(count($categorie->sousCategories) > 0)
                                            <a class="btn btn-primary modify" data-toggle="collapse" href="#multiCollapseExample{{$categorie->categorie_id}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample{{$categorie->categorie_id}}">{{$categorie->nom}}  <img src="/images/icons/expand.png"></a>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="collapse multi-collapse" id="multiCollapseExample{{$categorie->categorie_id}}">
                                                        <div class="card card-body divChange">
                                                            @foreach($categorie->sousCategories as $sousCategorie)
                                                                <li class="p-t-4">
                                                                    <input type="submit" name="cat" class="s-text13 active1" value="{{$sousCategorie->nom}}"
                                                                           onmouseover="this.style.color='#AEA71A'" onmouseout="this.style.color='black'"
                                                                           style="background-color: white !important;">
                                                                </li>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif

                                    @endforeach
                                @endif
                            </form>

                        </ul>


                        <!--  -->
                        <h4 class="m-text14 p-b-32">
                            Informations
                        </h4>
                        <ul>
                            <li><a href="{{url('/about')}}#nous">Qui sommes-nous? <img src="/images/icons/expand.png"></a></li>
                            <li><a href="{{url('/about')}}#paiement">Paiement <img src="/images/icons/expand.png"></a></li>
                            <li><a href="{{url('/about')}}#livraison">Livraison <img src="/images/icons/expand.png"></a></li>
                            <li><a href="{{url('/about')}}#cgv">CGV <img src="/images/icons/expand.png"></a></li>
                        </ul>
                        <h4 class="m-text14 p-b-32">
                            Cadeaux
                        </h4>
                        <ul>
                            <li><a href="{{url('/cadeaux')}}">Tous les cadeaux <img src="/images/icons/expand.png"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="search-product pos-relative bo4 of-hidden">
                            <form method="get" action="/search" role="search" style="width:700px;">
                                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search"
                                       placeholder="Chercher un produit...">

                                <button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                    <img src="images/search.png" alt="ICON" height="25" width="25">
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="row">
                        @if(count($produits) > 0)
                            @foreach($produits as $produit)
                                <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                    <!-- Block2 -->

                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative" style="border-radius: 20px;">
                                            <img src="{{asset('images/produits/'.$produit->image)}}" alt="IMG-PRODUCT"
                                                 style="width:269.98px; height:359.97px;">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>


                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none"
                                                           aria-hidden="true"></i>
                                                    </a>

                                                    <div class="block2-btn-addcart w-size2 trans-0-4">
                                                        <!-- Button -->

                                                        <button type="button"
                                                                class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                                                                data-toggle="modal"
                                                                data-target="#myModal{{$produit->produit_id}}">
                                                            Ajouter au panier
                                                        </button>
                                                        <a href="{{url('/Details/'.$produit->produit_id)}}">
                                                            <button>
                                                                Details
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a class="block2-name dis-block s-text3 p-b-5">
                                                {{$produit->nom}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
										{{$produit->points}} points
									</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade" id="myModal{{$produit->produit_id}}" role="dialog"
                                     style="margin-top:150px;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><b>{{$produit->nom}}</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table>
                                                    <tr>

                                                        <td> Description: <p><span
                                                                        class="more">{{$produit->description}} </span>
                                                            </p>
                                                            <br>
                                                            Prix: <p>{{$produit->prix}} TND</p>
                                                            <br>
                                                            Points: <p>{{$produit->points}}</p>
                                                            @auth
                                                            <form method="get"
                                                                  action="{{action('ProduitController@addGiftCart', ['id'=>$produit->produit_id,'nom'=>$produit->nom, 'points'=>$produit->points])}}">

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
                                                            @endauth
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/produits/'.$produit->image)}}"
                                                                 alt="IMG-PRODUCT"
                                                                 style="width:150px; height:150px; float:right;">
                                                        </td>
                                                    </tr>
                                                    @guest
                                                    <tr><td colspan="2"><b>Connectez-vous pour commander vos cadeaux</b></td></tr>
                                                    @endguest
                                                </table>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            @endforeach
                        @endif
                    </div>
                    <!-- Pagination -->
                    <!-- <div class="pagination flex-m flex-w p-t-26">
                         <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                         <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                     </div>-->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{URL::asset('js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection
