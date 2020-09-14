@extends('layout')
@section('title', 'Torrefactory')
@section('content_css')
    <link href="{{asset('css/style_produit.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">

        <div class="row mt-5 mb-3 ">
            <div class="col-12 titreproduit">
                <h3 class="text-center">- {{ $produit->productName }} -</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card pb-4 mt-4 mb-4 col-10 col-lg-12 rounded-0 produit">
                <div class="row no-gutters">
                    <div class="col-md-4 mt-4">
                        <img src="../images/vergnano_grain.jpg" class="card-img" alt="Café en grain Vergnano">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->price }} €</h5>
                            <form>
                                <div class="form-group pl-0 pr-5 col-3 col-lg-2">
                                    <label for="exampleFormControlSelect1">Quantitée</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <p class="card-text">Ce mélange Arabica/Robusta de diverses origines a été assemblé
                                    pour
                                    vous
                                    offrir un café aromatiquement intense avec un corps sirupeux et une longueur en
                                    bouche
                                    puissante.</p>
                                <p> Amateurs de café intense, vous allez vous régaler.</p>
                                <div class="row justify-content-center">
                                    <button type="button"
                                            class="btn col-5 col-md-4 mt-4 pb-2 pt-2 offset-md-7 rounded-0 buttonArticle">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="col-12">
                <h3>Vous Aimerez aussi</h3>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="card col-6 col-lg-3 pt-4 border-0 produitCatalogue" style="width: 18rem;">
                <img src="../images/grain_destination.jpg" class="card-img-top" alt="Café en grain Destination">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h5 class="card-title col-auto">Card title</h5>
                        <h5 class="card-title col-auto">14.90€</h5>
                    </div>
                </div>
            </div>
            <div class="card col-6 col-lg-3 pt-4 border-0 produitCatalogue" style="width: 18rem;">
                <img src="../images/grain_lugo.jpg" class="card-img-top" alt="Café en grain Lugo">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h5 class="card-title col-auto">Card title</h5>
                        <h5 class="card-title col-auto">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="card col-6 col-lg-3 pt-4 border-0 produitCatalogue" style="width: 18rem;">
                <img src="../images/grain_novel.jpg" class="card-img-top" alt="Café en grain Novel">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h5 class="card-title col-auto">Card title</h5>
                        <h5 class="card-title col-auto">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="card col-6 col-lg-3 pt-4 border-0 produitCatalogue" style="width: 18rem;">
                <img src="../images/grain_mauro.jpg" class="card-img-top" alt="Café en grain Mauro">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h5 class="card-title col-auto">Card title</h5>
                        <h5 class="card-title col-auto">Card title</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">

            <div class="col-12 d-flex flex-row mt-2">
                <h3>Pour mettre à jour ce produit </h3>
                <a href="{{route('produit-edit'  , ['id'=>$produit->productName])}}"
                   class="btn rounded-0 p-2 ml-5">Edit</a>

            </div>
            <div class="col-12 d-flex flex-row mt-2">
                <h3>Pour supprimer ce produit </h3>
                <form action="{{route('produit-destroy' ,  ['id'=>$produit->productName] )}}" method="post">

                    @method('Delete')

                    {{ csrf_field() }}

                    <button type="submit" class="btn rounded-0 p-2 ml-5" name="name[]"
                            value="{{$produit->productName}}">Supprimer un produit
                    </button>
                </form>
            </div>


            <div class="col-12 d-flex flex-row mt-2">
                <h3>Pour ajouter un nouveau produit </h3>
                <a href="{{route('produit-create')}}" class="btn rounded-0  p-2 ml-5">Nouveau produit</a>
            </div>

        </div>

    </div>
@endsection


