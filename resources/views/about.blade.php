@extends('layouts.plantillapadre')
@section('plantillapadre')
<style>

    .logo{
        float: left;
    }
    .logo {
    animation: fadeInUp 500ms ease-in-out;
}

@keyframes fadeInUp  {
    0% {
        opacity: 0;
        transform: translateY(160px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.logo:hover{

    opacity: 1;
}
.presi{
   
    
   margin: auto;
    float: right;

}
.presi {
    animation: fadeInUp 500ms ease-in-out;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(-160px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.presi:hover{

    opacity: 1;
}

</style>
<br>

<div class="container-fluid">

  <center>  <H2> Sobre Nosotros</h2> </center>
    <div class="container-fluid">

        <img class="logo" width="50%" src="img/logo.png ">
        
     </div>
        
        <div class="container-fluid">
        <img class="presi" width="50%" src="img/presi.png"
        
        
        </div>
</div>
<div>
    <p>
    <b>4Capital Traders Group Company</b>  pretende dar asesoramiento a empresas y profesionales con una filosofía clara: la prestación de sus servicios con la máxima profesionalidad y de un modo eficiente, ofreciendo la más alta calidad en gestión empresarial, basada en la comunicación directa y permanente con el cliente, con el objetivo de conseguir el mayor ahorro posible de costes.


    </p>


</div>
<center>
    <div class="container-fluid">
    <img class="logo" src="img/equipo.jpg">
    </div>
    
</center>
<p class="texto">Acumulamos una exitosa y reconocida experiencia en arreglos extrajudiciales, mediaciones amigables, litigios en recuperación de deudas, recuperación de bienes y resolución de conflictos, con relevantes resultados en disputas y transacciones complejas.

    Trabajamos en operaciones y procesos transfronterizos, con equipos multidisciplinarios integrados por profesionales del más alto nivel y de reconocido prestigio; con alianzas estratégicas dentro y fuera de Venezuela. Esto nos convierte en una Firma versátil, capaz de brindar apoyo eficaz e inmediato a nuestros clientes y sus asociados, bajo un nuevo concepto de asesoría y asistencia legal integrados. Un soporte necesario para el éxito y crecimiento de sus negocios en el mundo globalizado.</p>
<p>Una de nuestras principales fortalezas y especializaciones se desarrolla en el área de emprendimientos legales y administrativos para la recuperación de bienes, equipos y fondos de inversionistas extranjeros en mercados venezolanos. Más allá de las prácticas comunes, con soluciones innovadoras nos ocupamos del rescate de activos en situación de riesgo o pérdida por desavenencias o compromisos incumplidos por contrapartes asentadas en el país. En estos trabajos estamos a la cabeza del liderazgo, y en un serio compromiso con la responsabilidad, la excelencia y el éxito.</p>

    @endsection