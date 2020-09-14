<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style-navbar.css">
    <link rel="stylesheet" href="../css/style-footer.css">
    @yield('content_css')
</head>
<body id="top">


<nav class="navbar">
    <div class="container">

    <div class="menu-mobile">
        <label for="menu-checkbox">
            <span class="mobile"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></span>
        </label>
    </div>
    <input id="menu-checkbox" type="checkbox" class="menu-checkbox"/>

    <ul id="menu-burger" class="menu-burger">
        <li><a href="">Accueil</a></li>
        <li><a href="">Produits</a></li>
        <li><a href="">Box</a></li>
        <li><a href="">Mon compte</a></li>
        <li><a href="">Panier</a></li>
    </ul>

    <div class="nav-link"><a href="{{ route('home') }}"><span class="nav-text">Accueil</span></a></div>
    <div class="nav-link"><a href="{{ url('/catalogue') }}"><span class="nav-text">Produits</span></a></div>

    <div class="logo">
        <a href="{{ url('/') }}"><img class="logo-TF" src="../images/logo_bleu.png" alt="Torrefactory"></a>
    </div>

    <div class="nav-link"><a href="#"><span class="nav-text">Box</span></a></div>

    <div class="picto-user">
        <a href="#"><span class="user"><i class="fa fa-user-o" aria-hidden="true"></i></span></a>
    </div>
    <div class="picto-cart">
        <a href="{{ url('/panier') }}"><span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
    </div>
    <div class="picto-cart-mobile">
        <a href="{{ url('/panier') }}"><span class="cart"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i></span></a>
    </div>


    </div>
</nav>

@yield('content')

<div id="service" class="container">
    <div class="row mb-5 pb-5 text-center">
        <div id="picto" class="col-md-4">
            <img src="../images/service1.svg" alt="">
            <br>Livraison de qualité
        </div>
        <div id="picto" class="col-md-4 ">
            <img src="../images/service2.svg" alt="">
            <br>Paiement sécurisé
        </div>
        <div id="picto" class="col-md-4">
            <img src="../images/service3.svg" alt="">
            <br>Service après-vente
        </div>
    </div>
</div>

<footer id="footer" class="pt-5 pb-5 ">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mt-md-0 mt-3 ">
                <img src="../images/logo_bleu.png" alt="" class="img-fluid img-center" id="logo-footer">
                <h5 class="mb-4 pt-4">Navigation</h5>
                <ul class="list-unstyled">
                    <li><a href="#top">Haut de page</a></li>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/catalogue') }}">Produits</a></li>
                    <li><a href="#!">Box</a></li>
                    <li><a href="#!">Mon compte</a></li>
                    <li><a href="{{ url('/panier') }}">Panier</a></li>
                    <li><a href="#!">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-md-0 mb-3 text-center">
                <h5 class="mb-4 pt-4">Rejoignez-nous</h5>
                <div class="">
                    <a href="#"><img src="../images/facebook.svg" alt="" class="img-fluid mr-3" id="social-logo"></a>
                    <a href="#"><img src="../images/instagram.svg" alt="" class="img-fluid ml-3" id="social-logo"></a>
                </div>

            </div>

            <div class="col-md-4 mb-md-0 mb-3 text-right">
                <h5 class="mb-4 pt-4">Coordonnées</h5>
                <div class="mb-5">
                    <d1>TorreFactory Grenoble</d1>
                    <br>
                    27 Boulevard du Lorem <br>
                    38100 Grenoble <br>
                    Tél. +33 (0)4 76 69 69 69 <br>
                </div>


                <div class="">
                    <d1>TorreFactory Paris</d1>
                    <br>
                    56 Rue Ipsum <br>
                    75000 Paris <br>
                    Tél. +33 (0)1 53 69 69 69 <br>
                </div>

            </div>

        </div>
    </div>
</footer>


<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
></script>
</body>
</html>
