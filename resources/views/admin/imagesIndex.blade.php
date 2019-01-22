@extends('layouts.app2')
@section('title')
    Home
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('../images/icons/leaf.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/main.css')}}">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
@endsection
@section('content')
    <!-- Slide1 -->
    <div class="card-body card-block">
        <form  method="post" action="{{action('ImagesController@editPost')}}" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="col-12 col-md-9"><input type="text" id="id" name="id"  class="form-control" value="{{$image->id_table}}" style="visibility: hidden"></div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 1:</label></div>
                <div class="col-12 col-md-9"><input type="text"  name="Desc1image1Caroussel" value="{{$image->Desc1image1Caroussel}}"  class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 2</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nom" name="Desc2image1Caroussel" value="{{$image->Desc2image1Caroussel}}"  class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">télécharger la photo du produit</label></div>
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image1Caroussel"  class="form-control-file" accept="image/*" onchange="loadFile(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output" style="width:1349px; height:570px;"  src="{{asset('images/produits/'.$image->image1Caroussel)}}" />
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 1:</label></div>
                <div class="col-12 col-md-9"><input type="text"  name="Desc1image2Caroussel"  class="form-control" value="{{$image->Desc1image2Caroussel}}"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 2</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nom" name="Desc2image2Caroussel"  class="form-control" value="{{$image->Desc2image2Caroussel}}"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">télécharger la photo du produit</label></div>
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image2Caroussel" class="form-control-file" accept="image/*" onchange="loadFile1(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output1" style="width:1349px; height:570px;"  src="{{asset('images/produits/'.$image->image2Caroussel)}}"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 1:</label></div>
                <div class="col-12 col-md-9"><input type="text"  name="Desc1image3Caroussel"  class="form-control" value="{{$image->Desc1image3Caroussel}}"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description 2</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nom" name="Desc2image3Caroussel"  class="form-control" value="{{$image->Desc2image3Caroussel}}"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">télécharger la photo du produit</label></div>
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image3Caroussel" class="form-control-file" accept="image/*" onchange="loadFile2(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output2" style="width:1349px; height:570px;"  src="{{asset('images/produits/'.$image->image3Caroussel)}}"/>
                </div>
            </div>


    <!-- Banner -->
    <section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->

                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image1" class="form-control-file" accept="image/*" onchange="loadFile3(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output3" style="width:370px; height:478.94px;" src="{{asset('images/produits/'.$image->image1)}}"/>
                        </div>


                            <!-- Button -->
                                <input type="text" name="descImage1" value="{{$image->descImage1}}">




                    <!-- block1 -->

                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image2" class="form-control-file" accept="image/*" onchange="loadFile4(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output4" style="width:370px; height:339.16px;"  src="{{asset('images/produits/'.$image->image2)}}"/>
                        </div>


                            <!-- Button -->

                                <input type="text" name="descImage2" value="{{$image->descImage2}}">


                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->

                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image3" class="form-control-file" accept="image/*" onchange="loadFile5(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output5" style="width:370px; height:339.16px;" src="{{asset('images/produits/'.$image->image3)}}"/>
                        </div>


                            <!-- Button -->

                                <input type="text" name="descImage3" value="{{$image->descImage3}}">


                    <!-- block1 -->

                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image4" class="form-control-file" accept="image/*" onchange="loadFile6(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output6" style="width:370px; height:478.94px;" src="{{asset('images/produits/'.$image->image4)}}"/>
                        </div>

                                <input type="text" name="descImage4" value="{{$image->descImage4}}">

                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->

                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image5" class="form-control-file" accept="image/*" onchange="loadFile7(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output7" style="width:370px; height:478.94px;" src="{{asset('images/produits/'.$image->image5)}}"/>
                        </div>


                                <input type="text" name="descImage5" value="{{$image->descImage5}}">


                    <!-- block2 -->

                        <div class="block2 wrap-pic-w pos-relative m-b-30">
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image6" class="form-control-file" accept="image/*" onchange="loadFile8(event)">
                                <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                                <img id="output8" style="width:370px; height:338.84px;" src="{{asset('images/produits/'.$image->image6)}}"/>
                            </div>
                            <input type="text" name="descImage6" value="{{$image->descImage6}}">
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner2 -->
    <section class="banner2 bg5 p-t-55 p-b-55">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="">
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image11" class="form-control-file" accept="image/*" onchange="loadFile13(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output13" style="width:570px; height:426.7px;" src="{{asset('images/produits/'.$image->image11)}}"/>
                        </div>

                        <div class="">
                            <input type="text" name="descImage11" value="{{$image->descImage11}}">

                            <a href="#" class="s-text4 hov2 p-t-20 ">
                                View Collection
                            </a>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image12" class="form-control-file" accept="image/*" onchange="loadFile14(event)">
                            <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                            <img id="output14" style="width:570px; height:426.7px;" src="{{asset('images/produits/'.$image->image12)}}"/>
                        </div>

                        <div class="">
                            <div class="t-center">
                                <input type="text" name="descImage12" value="{{$image->descImage12}}">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br/>

    <!-- Instagram -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                <i class="fab fa-instagram"></i> Siguenos en Instagram
            </h3>
        </div>

        <div class="flex-w">
            <!-- Block4 -->
            <div class="">
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image13" class="form-control-file" accept="image/*" onchange="loadFile15(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output15" style="width:269.8px; height:269.8px;" src="{{asset('images/produits/'.$image->image13)}}"/>
                </div>


					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>


                        Hey<input type="text" name="descImage13" value="{{$image->descImage13}}">
                        <span class="s-text9">
							Photo by @nancyward
						</span>


            </div>

            <!-- Block4 -->
            <div class="">
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image14" class="form-control-file" accept="image/*" onchange="loadFile16(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output16" style="width:269.8px; height:269.8px;" src="{{asset('images/produits/'.$image->image14)}}"/>
                </div>



                       Wassup<input type="text" name="descImage14" value="{{$image->descImage14}}">

                        <span class="s-text9">
							Photo by @nancyward
						</span>


            </div>

            <!-- Block4 -->
            <div class="">
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image15" class="form-control-file" accept="image/*" onchange="loadFile17(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output17" style="width:269.8px; height:269.8px;" src="{{asset('images/produits/'.$image->image15)}}"/>
                </div>


                        Hey1<input type="text" name="descImage15" value="{{$image->descImage15}}">

                        <span class="s-text9">
							Photo by @nancyward
						</span>

            </div>

            <!-- Block4 -->
            <div class="">
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image16" class="form-control-file" accept="image/*" onchange="loadFile18(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output18" style="width:269.8px; height:269.8px;" src="{{asset('images/produits/'.$image->image16)}}"/>
                </div>




                        <input type="text" name="descImage16" value="{{$image->descImage16}}">

                        <span class="s-text9">
							Photo by @nancyward
						</span>
            </div>

            <!-- Block4 -->
            <div class="">
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image17" class="form-control-file" accept="image/*" onchange="loadFile19(event)">
                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                    <img id="output19" style="width:269.8px; height:269.8px;" src="{{asset('images/produits/'.$image->image17)}}"/>
                </div>

                        <input type="text" name="descImage17" value="{{$image->descImage17}}">


                        <span class="s-text9">
							Photo by @nancyward
						</span>

            </div>
        </div>
    </section>

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Free Delivery Worldwide
                </h4>

                <a href="#" class="s-text11 t-center">
                    Click here for more info
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 Days Return
                </h4>

                <span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Store Opening
                </h4>

                <span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
            </div>
        </div>
    </section>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>


@endsection


@section('scripts')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('../vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('../js/slick-custom.js')}}"></script>

    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/lightbox2/js/lightbox.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('../vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('../js/main.js')}}"></script>
    <script type="text/javascript">
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile1 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output1');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile2 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output2');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile3 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output3');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile4 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output4');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile5 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output5');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile6 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output6');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile7 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output7');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile8 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output8');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile9 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output9');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile10 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output10');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile11 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output11');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile12 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output12');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile13 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output13');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile14 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output14');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile15 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output15');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile16 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output16');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile17 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output17');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile18 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output18');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile19 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output19');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile20 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output20');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#select_sous_categorie').select2({ width: '100%' });
        });
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#select_type').select2({ width: '100%' });
        });
    </script>
@endsection
