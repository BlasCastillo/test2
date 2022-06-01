@extends('layouts.plantillapadre')
@section('plantillapadre')
<h5> comunidad</h5>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
      <div class="col">
      <div class="container">
  
  <div class="container-fluid">
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/blog-author.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">4Capital cambio mi vida</h5>
          <p class="card-text">gracias a los planes de inversión pude pagar la universidad</p>
          <p class="card-text"><small class="text-muted">última actualización hace menos de un mes</small></p>
        </div>
      </div>
      </div>
  
  </div>
  </div>
  </div>
      </div>
      <div class="col">
      <div class="container-fluid">
      <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/comments-1.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Gracias a 4Capital tengo un hogar </h5>
          <p class="card-text">pud aumentar mis ingresos en apenas dos años y sacarme un apartamento</p>
          <p class="card-text"><small class="text-muted">última actualización hace dos semanas</small></p>
        </div>
      </div>
  </div>
  </div>
  </div>
      </div>
      <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/comments-5.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">4Capital me convirtion en un ganador</h5>
          <p class="card-text">gracias a los cursos ofrecidos por esta empresa pase de deber dinero a ganar dinero</p>
          <p class="card-text"><small class="text-muted">última actualización hace tres semanas</small></p>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
      <div class="container">
  
  <div class="container-fluid">
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/comments-4.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">4Capital paga mis deudas</h5>
          <p class="card-text">la empresa gestionó un plan de inversión que incluye los pagos a mis deudores</p>
          <p class="card-text"><small class="text-muted">última actualización hace menos de un mes</small></p>
        </div>
      </div>
      </div>
  
  </div>
  </div>
  </div>
      </div>
      <div class="col">
      <div class="container-fluid">
      <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/comments-3.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">4Capital es mi familia</h5>
          <p class="card-text">toma mi familia tienes planes de inversión en 4Capital</p>
          <p class="card-text"><small class="text-muted">última actualización hace dos semanas</small></p>
        </div>
      </div>
  </div>
  </div>
  </div>
      </div>
      <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/comments-6.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">4Capital ya no soy pobre</h5>
          <p class="card-text">pase de vivir en un basurero a una casa propia en un año</p>
          <p class="card-text"><small class="text-muted">última actualización hace tres semanas</small></p>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
  <center>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Registrate y construye tu propia historia</h5>
              <p class="card-text">Desde 4Capital cambiamos mundos en el pensamiento de cada individuo</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="" >
                @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" ><img src="img/iniciar.jpg"></a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" ><img src="img/registrar.jpg" alt="Registrar" width="32px" height="32px"></a>
                                @endif
                            @endauth
                        </div>
                    @endif  
            </div>
          </div>
        </div>
      </div>


  </center>


@endsection