Bonjour {{$user->nom}},

Merci d'avoir passé une commande chez Naturebio!

<div class="container" style="background-color:white;">
    <h3 class="m-text20 p-b-24" align="center">Les dérails de votre commande</h3>
    <table class="table-shopping-cart" >
        <col width="10">
        <col width="10">
        <col width="10">
        <col width="10">
        <col width="10">
        <tr class="table-head">
            <th class="column-1"></th>
            <th class="column-2">Produit</th>
            <th class="column-3">Prix</th>
            <th class="column-4">Quantité</th>
            <th class="column-5">Total</th>
        </tr>
        @foreach(Basket::contents() as $produit)
        <tr class="table-row">
            <td class="column-1">
                <div class="cart-img-product b-rad-2 o-f-hidden">
                    <img src="{{asset('/images/produits/'.$produits->find($produit->id)->image)}}" alt="IMG-PRODUCT">
                </div>
            </td>
            <td class="column-2">{{$produit->name}}</td>
            <td class="column-3">{{$produit->price}}</td>
            <td class="column-4">{{$produit->quantity}}</td>
            <td class="column-5">{{$produit->price*$produit->quantity}}</td>
        </tr>
        @endforeach
    </table>

    <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

        <span class="m-text21 w-size20 w-full-sm">
						{{Basket::total(false)}}
					</span>
    </div>

    </br>
    <input type="submit" value="Passer la commande" class="btn" style="background-color:#243E36 !important;">
</div>

