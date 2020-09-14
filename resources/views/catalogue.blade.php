@extends('layout')
@section('title', 'Catalogue TorreFactory')
@section('content_css')
    <link rel="stylesheet" href="../css/style_catalogue.css">
@endsection


@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row mt-5 mb-4 ">
            <div class="col-12 titreproduit">
                <h2 class="text-center">CATALOGUE</h2>
            </div>
        </div>
        <div class="catalogue mb-5">
            <div class="card-group ">
                <div class="card ml-2 mr-2">
                    <img class="card-img" src="../images/cafe.png" alt="produits image">
                    <div class="card-img-overlay text-center products-card">
                        <a href="{{ url('/catalogue') }}" class="card-title link-products "><b>Produits</b></a>
                    </div>
                </div>
                <div class="card ml-2 mr-2">
                    <img class="card-img" src="../images/accessoires.png" alt="accessoires image">
                    <div class="card-img-overlay text-center products-card ">
                        <a href="" class="card-title link-products"><b>Accessoires</b></a>
                    </div>
                </div>
                <div class="card ml-2 mr-2">
                    <img class="card-img" src="../images/box.png" alt="box image">
                    <div class="card-img-overlay text-center products-card">
                        <a href="" class="card-title link-products"><b>Box</b></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5 mb-4 ">
            <div class="col-12 titreproduit">
                <h2 class="text-center">NOS CAFES</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row justify-content-center">

                    @foreach($produits as $produit)

                        <div class="card col-lg-3 pl-2 pr-2 mb-3 border-0 justify-content-center" style="width: 18rem;">
                            <a href="{{ url('/produit') }}"><img src="../images/vergnano_grain.jpg"
                                                                 class="card-img-top pt-4 pb-4"
                                                                 alt="cafe grain vergnano"></a>
                            <div class="card-body product">

                                <h5 class="card-title">{{ $produit->productName }}</h5>
                                <p class="card-text">Ce mélange Arabica/Robusta de diverses origines a été assemblé pour
                                    vous offrir un café aromatiquement intense avec un corps sirupeux et une longueur en
                                    bouche
                                    puissante.<br>Amateurs de café intense, vous allez vous régaler.</p>
                                <div class="row justify-content-end">
                                    <div class="col-auto  pb-4">
                                        <p class="card-text text-center pt-2 pb-2 pl-1 pr-1 buttonAchat">{{ $produit->price }} €</p>
                                    </div>
                                </div>
                                <div class="row pl-3 pr-3 justify-content-between">
                                    <a href="{{ url('/panier') }}" class="btn rounded-0 buttonAchat">Acheter</a>


                                    <a href="{{route('produit' , ['id'=>$produit->productName])}}" class="btn rounded-0 buttonDetail">Details</a>

                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

