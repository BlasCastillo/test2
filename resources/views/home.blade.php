@extends('layouts.plantillapadre')

@section('plantillapadre')
<link rel="stylesheet" href="{{ asset('css/estilostablas.css')}} ">
<div class="container-fluid">
<br><br>

<div class="promos">  
<div class="promo">
  <div class="deal">
    <span>Premium</span>
    <span>dividendos en 21 días continuos</span>
  </div>
  <span class="price">$100</span>
  <ul class="features">
    <li>duplica tu inversión</li>
    <li>cobros directos a tu wallet</li>
    <li>opción de reinversión</li>   
  </ul>
  <a href="compras/create">
  <button>Comprar</button></a>
</div>
<div class="promo scale">
  <div class="deal">
    <span>Plus</span>
    <span>Dividendos en 15 días continuos</span>
  </div>
  <span class="price">$200</span>
  <ul class="features">
  <li>duplica tu inversión</li>
    <li>cobros directos a tu wallet</li>
    <li>opción de reinversión</li>   
  </ul> <a href="compras/create">
  <button>Comprar</button></a>
</div>
<div class="promo">
  <div class="deal">
    <span>Basic</span>
    <span>Dividendos en 30 días continuos</span>
  </div>
  <span class="price">$50</span>
  <ul class="features">
  <li>duplica tu inversión</li>
    <li>cobros directos a tu wallet</li>
    <li>opción de reinversión</li>   
  </ul><a href="login"></a>
  <a href="compras/create">
  <button>Comprar</button></a>
</div>

@endsection
