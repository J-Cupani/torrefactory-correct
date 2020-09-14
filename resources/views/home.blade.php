@extends('layout')
@section('title', 'Boutique de café - Torrefactory Accueil')
@section('content_css')
    <link href="{{asset('css/style_home.css')}}" rel="stylesheet"/>
 @endsection


@section('content')
<div class="baniere">
    <img src="../images/homepic.jpg" class="img-fluid" alt="image banniere">
</div>

<div class="container">
    <div class="catalogue ">

        <div class="card-group ">
            <div class="card m-2">
                <img class="card-img" src="../images/cafe.png" alt="produits image">
                <div class="card-img-overlay text-center products-card">
                    <a href="{{ url('catalogue') }}" class="card-title link-products "><b>Produits</b></a>
                </div>
            </div>
            <div class="card m-2">
                <img class="card-img" src="../images/accessoires.png" alt="accessoires image">
                <div class="card-img-overlay text-center products-card ">
                    <a href="" class="card-title link-products"><b>Accessoires</b></a>
                </div>
            </div>
            <div class="card m-2">
                <img class="card-img" src="../images/box.png" alt="box image">
                <div class="card-img-overlay text-center products-card">
                    <a href="" class="card-title link-products"><b>Box</b></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-coeur-desktop mt-5">

        <div class="card ">
            <img class="card-img" src="../images/photo-coeur-desktop.png" alt="coeur image">
            <div class="card-img-overlay coeur-products-card">
                <h5 class="card-title">Nos <b>coups</b> de <b>coeurs</b></h5>
                <a href="" class="card-text">Découvrez nos cafés de spécialité !</a>

            </div>
        </div>
    </div>
    <div class="section-coeur-mobile m-5 ">
        <div class="card " >
            <img class="card-img-top" src="../images/coeur.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nos <b>coups</b> de <b>coeurs</b></h5>
                <a href="" class="card-text">Découvrez nos cafés de spécialité !</a>

            </div>
        </div>
    </div>
</div>
    @endsection

