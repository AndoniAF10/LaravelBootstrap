@extends('plantillaBootstrap')
@section('contentBootstrap')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="./images/316662.jpg" alt="">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Realiza viajes a lo grande</h1>
                <p>Agenda una cita con nosotros para que pronto puedas disfrutar de un extraordinario viaje</p>
                <p><a class="btn btn-lg btn-primary" href="#">Realizar agenda</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="./images/lugares-turisticos-de-hidalgo-prismas-basalticos-stefany-cisneros.jpeg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Conoce nuevos lugares</h1>
                <p>Tenemos muchos lugares que podemos recomendarte para disfrutar de unas buenas y merecidad vacaciones</p>
                <p><a class="btn btn-lg btn-primary" href="#">Ir a lugares turisticos</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/Creative-pictures-journey-to-the-world-plane-earth_1920x1200.jpg" alt="">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>¿Sabias que...</h1>
                <p>En vacaciones de semana santa tenemos muchos descuentos en viajes?</p>
                <p><a class="btn btn-lg btn-primary" href="#">Agendar un viaje</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row col-auto p-5 text-center">
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://w0.peakpx.com/wallpaper/740/955/HD-wallpaper-tour-across-world-attractions-culture-travel-visit.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></img>
    
            <h2>Conoce otros continentes</h2>
            <p>tenemos muchos viajes disponibles hacia Europa o a Asia, checa con detalle cuales son los viajes que tenemos para ti</p>
            <p><a class="btn btn-primary href="#">Ver detalles »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./images/concepto-de-verano-vacaciones-fiesta-gente-grupo-amigos-divirtiéndose-y-haciendo-en-la.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></img>
    
            <h2>Viaja con amigos</h2>
            <p>Varios de nuestros viajes tienen descuentos si vas con muchos acompañantes </p>
            <p><a class="btn btn-primary" href="#">Ver detalles »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./images/persona-usando-laptop-cafe_23-2147962618.webp" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></img>
    
            <h2>Ofertas para ti</h2>
            <p>Si no has encontrado algun destino para viajar, tal vez esta seccion de ofertas te puede interesar</p>
            <p><a class="btn btn-primary" href="#">Ver detalles »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Visita cancún. <span class="text-muted">No te arrepentirás</span></h2>
            <p class="lead">
              Cancún es tierra soñada para cualquiera buscando playas. Un clima ideal, aguas turquesa, arenas blancas, y la posibilidad de acceder
              a todo ello a través de paquetes en hoteles todo incluido hacen de Cancún el destino ideal.
              La verdad es que sobran los motivos para visitar Cancún y sin lugar a duda
              siempre va a encantar a todo el que lo visite. Aún así, entre todos en Faytur
              quisimos hacer una lista con razones por las que deben visitar Cancún.
            </p>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./images/puntacancun-airview.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect></img>
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Hospédate en el mejor hotel de méxico.  <span class="text-muted">Es grandioso.</span></h2>
            <p class="lead">Grand Velas Los Cabos ya había obtenido el máximo reconocimiento
               como el mejor resort del mundo. Esta propiedad con 5 Diamantes consigue que el arte
               , el diseño y la naturaleza se encuentren en un sólo espacio,
                para sorprender con un ambiente único a sus exclusivos huéspedes.

              Una alberca infinita de tres niveles ofrece una espectacular vista al mar; ésta será sólo el inicio de los placeres
               sibaritas de quienes buscan consentirse durante una agradable estancia en este complejo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./images/hoteles-Grand-Velas-Resorts-e1596047698604-640x360.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect></img>
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">No lo pienses más. <span class="text-muted">Realiza un viaje</span></h2>
            <p class="lead">
              el viajar nos obliga a ser más sociables, por el instinto de supervivencia a algo desconocido, nos hace que la relación con
              los demás sea más fluida y natural. 
              Viajar ayuda a hacer actividades que no hubiésemos hecho en otro lugar. ¡Ser tímido quedará en la historia!
            </p>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./images/descarga.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect></img>
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div>
 @endsection