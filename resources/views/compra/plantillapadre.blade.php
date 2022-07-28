<!DOCTYPE html>


<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>4Capital</title>
    <link href="{{asset('css/estilos.css')}}" rel='stylesheet'>
    
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/boxicons/css/boxicons.min.css')}}" rel='stylesheet'>
    <link rel="icon" href="{!!asset('img/favicon.png') !!}">
    <link rel="stylesheet" href="{{ asset('css/magic/magic.min.css')}} ">
    <script type='text/javascript' src="{{ asset('js/jquery.js')}} " ></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}" >
    <link rel="stylesheet" type="text/css" href= "{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href= "{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{asset('vendor/animsition/css/animsition.min.css')}}" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{asset('vendor/select2/select2.min.css')}}" >
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href= "{{asset('vendor/daterangepicker/daterangepicker.css')}}" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{asset('css/util.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" >
    <!--===============================================================================================-->
    <!-- Vendor CSS Files -->
    <link href="{{asset('etc/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href= "{{asset('etc/vendor/glightbox/css/glightbox.min.css')}}"  rel="stylesheet">
    <link href="{{asset('etc/vendor/swiper/swiper-bundle.min.css')}}"  rel="stylesheet">

    <!-- header over static -->
                                
  </head>
                                
                                <body className='snippet-body'>
                                <body id="body-pd">
<div class="container-login100" style="background-image: url(
'img/bg-01.jpg');">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"> </i> </div>
     
       <div class="icon-header"> <img class="btn-whatsapp" style="cursor: hand;" src="img/wh.png" width="32" height="32" alt="Whatsapp" onclick="window.location.href='https://wa.me/584245937898?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">
        <a href="twitter.com"><img src="img/tw.png"></a></i>
        <a href="twitter.com"><img src="img/fb.png"></a>
        <a href="twwiter.com"><img src="img/in.png"></a>
        <a href="twwiter.com"><img src="img/lk.png"></a>
     
    </div>
    	
        <div class="" >
          
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  
                    @auth
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <a href="{{ route('login') }}" ><img src="img/iniciar.jpg"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" ><img src="img/registrar.jpg" alt="Registrar" width="32px" height="32px"></a>
                        @endif
                    @endauth
                </div>
            @endif  
        
        
        
        
    </header>
    <!-- end header over static -->

    <!--menu nav responsive-->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">4Capital</span> </a>
                <div class="nav_list"> <a href="dashboard.html" class="nav_link active"> <i class='bx bx-sort-down'></i> <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <br>
    <!-- end menu nav responsive-->

    <!-- Vendor JS Files -->

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>4Capital Traders Group Company</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>4Capital.com
            </h6>
            <p>
                Carrer Gremi de Sabaters, 21, LOCAL 7, 07009 Palma, Illes Balears, España
            </p>
            <img src="img/logo.png" width="70%">
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Horario de atención
            </h6>
            <p>
              <a href="#!" class="text-reset"> durante todo el año:
                </a>
            </p>
            <p>
              <a href="#!" class="text-reset">De LUNES a JUEVES de 8:00 a 16:30
                </a>
            </p>
            <p>
              <a href="#!" class="text-reset">Y   VIERNES de 8:00 a 15:00</a>
            </p>
            
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="/" class="text-reset">Inicio</a>
            </p>
            <p>
              <a href="#!" class="text-reset">planes</a>
            </p>
            <p>
              <a href="login" class="text-reset">Login</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contacto</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2020 Copyright:
      <a class="text-reset fw-bold" href="">4Capital
          .com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    
  <script src="{{asset('etc/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  
  <script src="{{asset('etc/vendor/glightbox/js/glightbox.min.js')}}" ></script>
  <script src="{{asset('etc/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('etc/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('etc/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('etc/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->

  <script src="{{asset('etc/js/main.js')}}"></script>
  <script type='text/javascript' src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('js/api.js')}}" ></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript'></script>
  <!-- Enlazar CSS Floating WhatsApp -->
<link rel="stylesheet" href="https://rawcdn.githack.com/jerfeson/floating-whatsapp/0310b4cd88e9e55dc637d1466670da26b645ae49/floating-wpp.min.css"><!-- Enlazar JS Floating WhatsApp -->
<script type="text/javascript" src="https://rawcdn.githack.com/jerfeson/floating-whatsapp/0310b4cd88e9e55dc637d1466670da26b645ae49/floating-wpp.min.js"></script><div id="WABoton"></div><!-- Inicializar librería Floating WhatsApp  -->
<script>
jQuery(document).ready(function($){
$('#WABoton').floatingWhatsApp({
phone: '+584245937898', // Número WhatsApp Business
popupMessage: 'Hola 👋 ¿Cómo podemos ayudarte?', // Mensaje pop up
message: "Hola 4Capital...", // Mensaje por defecto
showPopup: true, // Habilita el pop up
headerTitle: 'WhatsApp Chat', // Título del header
headerColor: '#25D366', // Color del header
buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', // Icono WhatsApp
size: '72px', // Tamaño del icono
backgroundColor: '#00000', // Color de fondo del botón
position: "left", // Posición del icono
avatar: 'https://www.perdomoyasociados.com/tecnologia/wp-content/uploads/2018/02/avatar021-300x254.png', // URL imagen avatar
avatarName: '4Capital Soporte', // Nombre del avatar
avatarRole: 'Soporte', // Rol del avatar
//autoOpenTimeout: 3000,
zIndex: '99999',
});
});
</script>




</body>
</html>@yield('plantillapadre')