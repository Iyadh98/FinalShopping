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
<link rel="stylesheet" href="{{URL::asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/scss/bootstrap/_modal.scss')}}">


<link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
@endsection
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liste des commandes</strong>
            </div>
            <div class="card-body">


                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Montant</th>
                        <th>Date de commande</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Etat</th>
                        <th>Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($commandes) > 0)
                    @foreach($commandes as $key => $commande)
                    <tr>
                        <td>{{$commande->user->nom}} {{$commande->user->prenom}}</td>
                        <td>{{$commande->montant}}</td>
                        <td>{{$commande->date}}</td>
                        <td>{{$commande->adresse}}</td>
                        <td>{{$commande->code_postal}}</td>
                        <td>@if($commande->etat==1)
                            Commande en cours
                            @elseif ($commande->etat==2)
                            Commande prête
                            @endif
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-success btn-sm"
                                    data-toggle="modal"
                                    data-target="#myModal{{$commande->commande_id}}">
                                <i class="fa fa-dot-circle-o"></i> Détails
                            </button>
                            @if ($commande->etat == 1)
                            <a href="{{action('CommandeController@changerEtatPrete',$commande->commande_id)}}">
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Prête
                                </button>
                            </a>
                            @elseif ($commande->etat == 2)
                            <a href="{{action('CommandeController@changerEtatLivree',$commande->commande_id)}}">
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Livrée
                                </button>
                            </a>
                            @endif
                        </td>
                    </tr>
<!--
                    <div class="modal fade" id="myModal{{$commande->commande_id}}" role="dialog"
                         style="margin-top:150px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <tr>
                                            <td>Client</td>
                                            <td>{{$commande->user->nom}} {{$commande->user->prenom}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date Commande</td>
                                            <td>{{$commande->date}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adresse</td>
                                            <td>{{$commande->adresse}}</td>
                                        </tr>
                                        <tr>
                                            <td>Code Postal</td>
                                            <td>{{$commande->code_postal}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> Liste des produits</td>
                                        </tr>
                                        @if(count($commande->produitCommandes) > 0)
                                        @foreach($commande->produitCommandes as $key => $produitCommande)
                                        <tr>
                                            <td>{{$produitCommande->produit->nom}}</td>
                                            <td>{{$produitCommande->quantite}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
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
-->

                    <div class="modal fade" id="myModal{{$commande->commande_id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <tr>
                                            <td>Client</td>
                                            <td>{{$commande->user->nom}} {{$commande->user->prenom}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date Commande</td>
                                            <td>{{$commande->date}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adresse</td>
                                            <td>{{$commande->adresse}}</td>
                                        </tr>
                                        <tr>
                                            <td>Code Postal</td>
                                            <td>{{$commande->code_postal}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> Liste des produits</td>
                                        </tr>
                                        @if(count($commande->produitCommandes) > 0)
                                        @foreach($commande->produitCommandes as $key => $produitCommande)
                                        <tr>
                                            <td>{{$produitCommande->produit->nom}}</td>
                                            <td>{{$produitCommande->quantite}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>


@endsection

<!-- Right Panel -->


@section('scripts')
<script src="{{URL::asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/plugins.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>



<script src="{{URL::asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>


<script type="text/javascript">

    $(document).ready(function () {
// For A Delete Record Popup
        $('.remove-record').click(function () {
            var id = $(this).attr('data-id');
            var url = $(this).attr('data-url');

            $(".remove-record-model").attr("action", url);
            $('body').find('.remove-record-model').append('<input name="_method" type="hidden" value="DELETE">');
            $('body').find('.remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.remove-record-model').find("input").remove();
        });
        /*
        $('.modal').click(function () {
// $('body').find('.remove-record-model').find( "input" ).remove();
        });*/
    });
</script>

@endsection
