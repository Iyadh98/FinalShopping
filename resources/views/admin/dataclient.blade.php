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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
@endsection

@section('content')
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">La liste des clients</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Points</th>
                                    <th>Opérations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($users)>0)
                                    @foreach($users as $user)
                                <tr>
                                    <td>{{$user->nom}}</td>
                                    <td>{{$user->prenom}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->adresse}}</td>
                                    <td>{{$user->score}}</td>
                                    <td>
                                        <a href="{{action('UserController@retirerPointsCadeau',$user->id)}}">
                                            <button class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Récuperer le cadeau
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
 @endsection

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
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();

    } );
</script>
@endsection


