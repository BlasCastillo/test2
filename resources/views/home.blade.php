@extends('layouts.plantillapadre')

@section('plantillapadre')
<link rel="stylesheet" href="{{ asset('css/estilostablas.css')}} ">

<div class="promos">  
<div class="promo">
  <div class="deal">
    <span>Premium</span>
    <span>This is really a good deal!</span>
  </div>
  <span class="price">$79</span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
  <button>Sign up</button>
</div>
<div class="promo scale">
  <div class="deal">
    <span>Plus</span>
    <span>This is really a good deal!</span>
  </div>
  <span class="price">$89</span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
  <button>Sign up</button>
</div>
<div class="promo">
  <div class="deal">
    <span>Basic</span>
    <span>Basic membership</span>
  </div>
  <span class="price">$69</span>
  <ul class="features">
    <li>Choose the one on the left</li>
    <li>We need moneyy</li>
    <li>And more...</li>   
  </ul>
  <button>Sign up</button>
</div>
</div>

@endsection
