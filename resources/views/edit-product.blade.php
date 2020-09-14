@extends('layout')
@section('title', 'Torrefactory')
@section('content_css')
    <link href="{{asset('css/style_produit.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <form method="post" action="{{ route('produit-update', ['id'=>$produit->productName]) }}">

            @method('PUT')

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nom de l'article</label>
                <input type="text" class="form-control" id="name" name="productName" value="{{ $produit->productName }}"
                       required>
                @if($errors->has('productName'))
                    <div class="alert alert-warning" role="alert">
                        {{ $errors->first('productName') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="price">Prix de l'article</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $produit->price }}" required>
                @if($errors->has('price'))
                    <div class="alert alert-warning" role="alert">
                        {{ $errors->first('price') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="form-control btn buttonArticle">- Mettre à jour -</button>
        </form>
    </div>
@endsection


