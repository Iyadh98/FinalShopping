@extends('layouts.app2')
@section('title')
    Home
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/lightbox2/css/lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }

    </style>

@endsection

@section('content')
    <!-- Title Page -->
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
                            @if(count($categories) > 0)
                                @foreach($categories as $categorie)

                                    <li class="p-t-4">
                                        <a href="#" class="s-text13 active1">
                                            {{$categorie->nom}}
                                        </a>
                                    </li>

                                @endforeach
                            @endif

                        </ul>

                        <!--  -->
                        <h4 class="m-text14 p-b-32">
                            Filtres
                        </h4>


                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="search-product pos-relative bo4 of-hidden">
                            <form method="get" action="/search" role="search">
                                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search"
                                       placeholder="Search Products...">

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
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="{{asset('images/produits/'.$produit->image)}}" alt="IMG-PRODUCT"
                                                 style="width:250px; height:350px;">

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


                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a class="block2-name dis-block s-text3 p-b-5">
                                                {{$produit->nom}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
										{{$produit->prix}} DNT
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
                                                            <form method="get"
                                                                  action="{{action('ProduitController@addCart', ['id'=>$produit->produit_id,'nom'=>$produit->nom, 'prix'=>$produit->prix])}}">

                                                                <br>
                                                                <div><label for="quantite" class=" form-control-label">Quantité:</label>
                                                                </div>
                                                                <div><input type="number" name="quant" value="1"
                                                                            class="input-group form-control" width="10" ></div>


                                                                <button type="submit" style="margin-left:100px;"
                                                                        class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                                                    Ajouter au panier
                                                                </button>

                                                            </form>
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/produits/'.$produit->image)}}" alt="IMG-PRODUCT"
                                                                 style="width:150px; height:150px; float:right;">
                                                        </td>
                                                    </tr>
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
                    <a href="{{action('ProduitController@destroyCart')}}" class="btn btn-warning">Edit</a>
                {{        Log::info("Test1")}}
                <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                    </div>
                </div>
            </div>
        </div>

















    </section>








@endsection

@section('scripts')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/select2/select2.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/sweetalert/sweetalert.min.js')}}"></script>


    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/noui/nouislider.js')}}"></script>
    <script type="text/javascript">
        /*[ No ui ]
        ===========================================================*/
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [50, 200],
            connect: true,
            range: {
                'min': 50,
                'max': 200
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function (values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Configure/customize these variables.
            var showChar = 100;  // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";


            $('.more').each(function () {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function () {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>


@endsection