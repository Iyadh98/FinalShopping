<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/logo12.png">

    <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">
    <link href="{{URL::asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="images/icons/naturelogo.png" alt="Logo" style="margin-right:50px;"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/icons/naturelogo.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{URL::asset('/admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/admin/clients')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Clients</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/admin/lister_messages')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Messages Clients</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Commandes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_commandes')}}">Lister commandes</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_commandes_livrees')}}">Lister commandes livrées</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_commandes_annulees')}}">Lister commandes annulées</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Produits</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_produit')}}">Lister
                                produits</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/ajouter_produit')}}">Ajouter
                                produit</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Categories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_categorie')}}">Lister categories</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/ajouter_categorie')}}">Ajouter categorie</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sous categories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/lister_sous_categorie')}}">Lister sous categories</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('/admin/ajouter_sous_categorie')}}">Ajouter sous categorie</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/admin/clients')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Modifier page d'accueil</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/admin/emailSubscriber/1')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Envoyer un email aux subscribers</a>
                </li>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                        </div>
                    </div>
                    <a href="{{url('/')}}">Preview page</a>
                </div>
            </div>

            <div class="col-sm-5">

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                       aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language">
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert
                message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>








    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{URL::asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{URL::asset('assets/js/plugins.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
<script src="{{URL::asset('assets/js/widgets.js')}}"></script>

</body>
</html>
