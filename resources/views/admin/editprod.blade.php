@extends('layouts.app1')
@section('css_content')
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">

    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@endsection

@section('content')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Modifier le produit: {{$produit->nom}}</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ action('ProduitController@editPost') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row form-group">
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-9"><input type="text" id="id" name="id"  class="form-control" value="{{$produit->produit_id}}" style="visibility: hidden"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nom" name="nom"  class="form-control" value="{{$produit->nom}}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" class="form-control" > {{$produit->description}}
                                    </textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prix</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="prix" name="prix" class="form-control" value="{{$produit->prix}}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="test-input" class=" form-control-label">Points</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="points" name="points" class="form-control" value="{{$produit->points}}"><small class="help-block form-text">Score attribué lors de l'achat du produit</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="test-input" class=" form-control-label">Catégorie</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="sousCategorie" id="select_sous_categorie">
                                        @if(count($sousCategories) > 0)
                                        @foreach($sousCategories as $key => $sousCategorie)
                                        <option value="{{$sousCategorie->sous_categorie_id}}" @if ($produit->sous_categorie_id==$sousCategorie->sous_categorie_id) selected @endif>
                                            {{$sousCategorie->nom}}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col col-md-3"><label for="test-input" class=" form-control-label">Type</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="type" id="select_type">
                                        @if(count($types) > 0)
                                        @foreach($types as $key => $type)
                                        <option value="{{$type->type_produit_id}}" @if ($produit->type_produit_id==$type->type_produit_id) selected @endif>
                                            {{$type->nom}}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">télécharger la photo du produit</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file" accept="image/*" onchange="loadFile(event)">
                                    <small class="help-block form-text">Veuillez redimensionner à 720x960</small>
                                    <img id="output" style="width:250px; height:350px;" src="{{asset('images/produits/'.$produit->image)}}"/>
                                </div>
                            </div>

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

                </div>
            </div>
                @endsection

@section('scripts')
    <script src="{{URL::asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
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
