@extends('layout')
@section('title', 'Panier TorreFactory')
@section('content_css')
    <link href="{{asset('css/style_panier.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container mt-5 panier">
        <hr>
        <div class="row chrono-bar m-5">
            <div class="progress chrono-bar1" style="height: 15px ; width: 1000px">
                <div class="progress-bar chrono-bar2" role="progressbar" style="width: 400px; height: 15px"
                     aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100">Panier
                </div>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-lg-8 panier-products">
                <ul class="list-unstyled">
                    <li class="media product-line">
                        <img class="mr-3" src="../images/produit3.png" alt="Generic placeholder image">
                        <div class="media-body d-flex flex-row align-items-center">
                            <div class="col-7 mt-4">
                                <h5>Nom</h5>
                                <h6>Poids : xxx gr</h6>
                            </div>
                            <div class="col-2">
                                <label for="quantity"></label>
                                <input type="number" class="form-control bg-light rounded-0" id="quantity" min="1"
                                       name="" value="">
                            </div>
                            <div class="col-3">
                                <h5>xx,xx€</h5>
                            </div>
                        </div>
                    </li>
                    <li class="media my-4 product-line">
                        <img class="mr-3" src="../images/produit2.png" alt="Generic placeholder image">
                        <div class="media-body d-flex flex-row align-items-center">
                            <div class="col-7 mt-4">
                                <h5>Nom</h5>
                                <h6>Poids : xxx gr</h6>
                            </div>
                            <div class="col-2">
                                <label for="quantity"></label>
                                <input type="number" class="form-control bg-light rounded-0" id="quantity" min="1"
                                       name="" value="">
                            </div>
                            <div class="col-2">
                                <h5>xx,xx€</h5>
                            </div>
                        </div>
                    </li>
                    <li class="media product-line">
                        <img class="mr-3" src="../images/produit1.png" alt="Generic placeholder image">
                        <div class="media-body d-flex flex-row align-items-center">
                            <div class="col-7 mt-4">
                                <h5>Nom</h5>
                                <h6>Poids : xxx gr</h6>
                            </div>
                            <div class="col-2">
                                <label for="quantity"></label>
                                <input type="number" class="form-control bg-light rounded-0" id="quantity" min="1"
                                       name="" value="">
                            </div>
                            <div class="col-3">
                                <h5>xx,xx€</h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 panier-price  ">
                <div class=" row d-flex flex-row">
                    <div class="col-8  mt-3 ">
                        <h5>X article</h5>
                        <h5>Frais de port</h5>
                        <h5>Total HT</h5>
                        <h5><b>Total TTC</b></h5>
                    </div>
                    <div class="col-4 mt-3">
                        <h5>xx,xx€</h5>
                        <h5>xx,xx€</h5>
                        <h5>xx,xx€</h5>
                        <h5><b>xx,xx€</b></h5>

                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col-7 mt-5 pr-0">
                        <input type="text" class=" form-control rounded-0" id="exampleFormControlInput1"
                               placeholder="code promo :">
                        <label for="exampleFormControlInput1"></label>
                    </div>
                    <div class="col-5 mt-5 pl-0">
                        <button type="submit" class="form-control buttonPanier rounded-0 "><b>Ajouter</b></button>
                    </div>
                </div>

                <form action="" method="post">
                <button type="submit" class="form-control buttonPanier p-2 rounded-0 "><b>Commander</b></button>
                </form>
                <div class="row d-flex flex-row mt-5">
                    <div class="col-6 mt-5 ">
                        <h6 class="case-services p-2">Paiment sécurisé</h6>
                    </div>
                    <div class="col-6 mt-5">
                        <h6 class="case-services p-2">Livraison 24h-48h</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

