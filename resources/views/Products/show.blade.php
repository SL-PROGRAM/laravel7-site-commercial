@extends('layouts.app')
@section('content')
    <div class="container">
        <div class=row>
            <div class="col s12 m6">
                <img style="width: 100%" src="/images/{{ $produit->image }}">
            </div>
            <div class="col s12 m6">
                <h4>{{ $produit->name }}</h4>
                <p><strong>{{ number_format($produit->price, 2, ',', ' ') }} € TTC</strong></p>
                <p>{{ $produit->description }}</p>
                <form  method="POST" action="#">
                    @csrf
                    <div class="input-field col">
                        <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
                        <input id="quantity" name="quantity" type="number" value="1" min="1">
                        <label for="quantity">Quantité</label>
                        <p>
                            <button class="btn waves-effect waves-light" style="width:100%" type="submit" id="addcart">Ajouter au panier
                                <i class="material-icons left">add_shopping_cart</i>
                            </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
