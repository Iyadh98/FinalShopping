<!DOCTYPE html>
<html lang="en" xmlns:Basket="http://www.w3.org/1999/xhtml">
<head>
    <title>Naturebio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('css_content')
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">

        <div class="wrap_header">
            <!-- Logo -->
            <a href="{{ url('/index') }}" class="logo">
                <img src="images/icons/naturelogo.png" alt="IMG-LOGO" style="height:100px; margin-bottom:20px;">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{url('/index')}}">Accueil</a>
                        </li>

                        <li>
                            <a href="{{url('/produits')}}">Produits</a>
                        </li>
                        <li>
                            <a href="{{url('/panier')}}">Panier</a>
                        </li>

                        <li>
                            <a href="{{url('/about')}}">Savoir plus</a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">Contactez-nous</a>
                        </li>
                        @if(Auth::user() && Auth::user()->isAdministrator())
                            <li>
                                <a href="{{url('/admin')}}">Dashboard</a>
                            </li>

                        @endif
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{Auth::user()->prenom}} {{ Auth::user()->nom }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/profil') }}">
                                    {{ __('Consulter profil') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="images/cart.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">{{Basket::totalItems()}}</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            @foreach(Basket::contents() as $produit)

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">

                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                       {{$produit->name}}
                                    </a>

                                    <span class="header-cart-item-info">
											{{$produit->quantity}} x {{$produit->price}}TND
										</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>

                        <div class="header-cart-total">
                            Total: {{Basket::total(false)}} TND
                        </div>


                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="{{url('/panier')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Voir le panier
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="{{ url('/index') }}" class="logo-mobile">
            <img src="images/icons/naturelogo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/profil') }}">
                                {{ __('Consulter profil') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Deconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

                <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src="images/cart.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">{{Basket::totalItems()}}</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                @foreach(Basket::contents() as $produit)
                                    <li class="header-cart-item">
                                        <div class="header-cart-item-img">
                                            <img src="images/item-cart-01.jpg" alt="IMG">
                                        </div>

                                        <div class="header-cart-item-txt">
                                            <a href="#" class="header-cart-item-name">
                                                {{$produit->name}}
                                            </a>

                                            <span class="header-cart-item-info">
											{{$produit->quantity}} x {{$produit->price}}TND
										</span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                            <div class="header-cart-total">
                                Total: {{Basket::total(false)}} TND
                            </div>


                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="{{url('/panier')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a @if ( Basket::totalItems() == 0)
                                       href="#"
                                       class="flex-c-m size1 bg5 bo-rad-20 hov1 s-text2 trans-0-4"
                                       @else
                                       @auth
                                       href="{{url('/checkout')}}"
                                       @endauth
                                       @guest
                                       href="{{url('/login')}}"
                                       @endguest
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4"
                                            @endif>
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Livraison gratuite à partir de 20DT
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								barbouchemed@gmail.com
							</span>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    </div>
                </li>

                        <li class="item-menu-mobile">
                            <a href="{{url('/index')}}">Accueil</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="{{url('/produits')}}">Produits</a>
                        </li>
                        <li class="item-menu-mobile">
                            <a href="{{url('/panier')}}">Panier</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="{{url('/about')}}">Savoir plus</a>
                        </li>
                        <li class="item-menu-mobile">
                            <a href="{{url('/contact')}}">Contactez-nous</a>
                        </li>
                        @if(Auth::user() && Auth::user()->isAdministrator())
                <li class="item-menu-mobile">
                    <a href="{{url('/admin')}}">Dashboard</a>
                            </li>

                        @endif

            </ul>
        </nav>
    </div>
</header>


@yield('content')


<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Plus de contact
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Pour plus de questions, veuillez utiliser la rubrique "Contactez-nous" située dans la  barre en haut du site.
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>



        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">


            <h4 class="s-text12 p-b-30">
                Liens
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Produits
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Panier
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Savoir plus
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contactez-nous
                    </a>
                </li>
            </ul>
        </div>



        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form action="{{action('SubscriberController@addPost')}}" method="post">
                {{csrf_field()}}
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>


</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

@yield('scripts')
</body>
</html>
