@extends('layouts.shop')

@section('body')
<h1>Your Shopping Cart</h1>
<div id="cart-container">
    <div id="cart">
        <i class="fa fa-shopping-cart fa-2x openCloseCart" aria-hidden="true"></i>
        <button id="emptyCart" class="btn btn-dark">Empty Cart</button>
    </div>
    <span id="productCount"></span>
</div>


<div id="shoppingCart">
    <div id="cartProductsContainer">
        <h2>Products in your cart</h2>
        <i class="fa fa-times-circle-o fa-3x openCloseCart" aria-hidden="true"></i>
        <div id="cartProducts">
            
        </div>
        <button class="btn btn-primary" id="checkout">Checkout</button>
        <span id="cartTotal"></span>
    </div>
</div>

<nav>
    <ul>
        <li><a href="index.html">Shopping Cart</a></li>
    </ul>
</nav>
<div class="container container-fluid" id="products">

</div>
@endsection