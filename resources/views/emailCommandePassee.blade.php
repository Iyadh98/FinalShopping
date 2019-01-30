Bonjour {{$user->nom}},

Merci d'avoir passé une commande chez Naturebio!

<div class="container" style="background-color:white;">
    <h3 class="m-text20 p-b-24" align="center">Les détails de votre commande</h3>
    <table class="table-shopping-cart" >
        <col width="10">
        <col width="10">
        <col width="10">
        <col width="10">
        <tr class="table-head">
            <th class="column-2">Produit</th>
            <th class="column-3">Prix</th>
            <th class="column-4">Quantité</th>
            <th class="column-5">Total</th>
        </tr>
        @foreach($contenu as $produit)
        <tr class="table-row">
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
						{{$total}}
					</span>
    </div>
</div>


