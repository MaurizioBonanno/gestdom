<!-- header con carousel -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Immobiliare Paglieri</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      body {
        background-color: rgb(12, 71, 129);
        color: floralwhite;
      }
      .container {
        padding-left: 24px;
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-dark bg-primary fixed-top" style="z-index: 10000;max-height: 2.5em;">

            <ul class="navbar-nav mr-auto" id="menu" >
                <li class="nav-item active">
                  <a class="nav-link" href="tel:+39 347.11.755.32 ">
                    <i class="fas fa-phone-square-alt"></i>+39 347.11.755.32
                  </a>
                </li>
            </ul>

         </nav>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="padding-top: 3em;">
          <a class="navbar-brand" href="#">
          <!--  <img src="images/logo4.png" style="max-height:30px;width: auto"> -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/chi_siamo">CHI SIAMO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="/per_comprare">PER COMPRARE</a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link " href="/per_vendere">PER VENDERE</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link " href="/valutazioni">VALUTAZIONI</a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link " href="/immobili">IMMOBILI</a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link " href="/contatti">CONTATTI</a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link " href="/news">NEWS</a>
              </li>
            </ul>
            Paglieri<br>
            Real Estate
          </div>
        </nav>
      </header>

<main role="main">

<div class="row">
    <div class="col-12">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top: 10em;">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="{{asset('storage/'.$casa->immagine)}}" class="d-block w-100" alt="...">
          </div>

          @foreach ($photos as $photo)
            <div class="carousel-item">
            <img src="{{asset('storage/'.$photo->path)}}" class="d-block w-100" alt="...">
            </div>
          @endforeach

        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
<hr>
<br>
    <div class="col-sm-6">
       <h4>{{$casa->titolo}}</h4>
    </div>
    <div class="col-sm-6">
        <h4>{{$casa->tipologia}}</h4>
     </div>
    <div class="col-12">
        {{$casa->descrizione}}
    </div>
    <div class="col-md-4">
      Metri Quadrati: {{$casa->metri}}
    </div>
    <div class="col-md-4">
        Vani: {{$casa->camere}}
    </div>
    <div class="col-md-4">
        Bagni: {{$casa->bagni}}
    </div>
    <div class="col-sm-12">
        <h3>Prezzo: €: {{$casa->prezzo}}</h3>
     </div>
    </div>
  </div>
</main>
<!-- FOOTER -->
<footer class="container align-items-end" style="padding-top: 5em;">
    <div class="row justify-content-md-center">
      <div class="col-sm-4">
              <p>
                Paglieri Team Immobiliare
                  <a href="https://www.facebook.com/Paglieri-Team-Immobiliare-2120029808088169/?view_public_for=2120029808088169" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="https://www.linkedin.com/company/paglieriteamimmobiliare" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
              </p>
      </div>
      <div class="col-sm-4">
        <adress>Via XX Settembre, 1/1 sc.D - 16121 Genova</adress>
      </div>
      <div class="col-sm-4">
          <p><i class="fas fa-at"></i> <a href="mailto:info@paglierire.it"> mail: info@paglierire.it </a></p>
      </div>
      <div class="col-sm-3" style="padding-top: 1em;">
        <p>
          <a href="tel:+39 347.11.755.32 " class="btn btn-lg btn-primary" role="button">
            <i class="fas fa-phone-square-alt"></i> +39 347.11.755.32
          </a>
        </p>
      </div>
      <div class="col-sm-3" style="padding-top: 1em;">
        <p>
          <a href="tel:+39 327.70.52.339 " class="btn btn-lg btn-primary" role="button">
            <i class="fas fa-phone-square-alt"></i>  +39 327.70.52.339
          </a>
        </p>
      </div>
      <!--
      <div class="col-sm-3" style="padding-top: 1em;">
        <p>
          <a href="tel:+39 010.85.802.10" class="btn btn-lg btn-primary" role="button">
            <i class="fas fa-phone-square-alt"></i>  +39 010.85.802.10
          </a>
        </p>
      </div>
      -->
      <div class="col-sm-3">
             <a href="https://wa.me/393471175532?text=Sarei%20interessato%20ad%20avere%20maggiori%20informazioni%20grazie" target="_blank">
                <img src="/images/whatsapp.png" alt="conttataci con whatsapp"
                style="max-width: 100px; max-height: auto;">
              </a>
        </div>

        <div class="col-sm-3">
          <img  src="/images/remax-collection-horizontal-rgb-wht500x500.png" style="max-height: 50px;"><br>
          associato: Specialisti immobiliari
        </div>
   </div>
</footer>
</main>
<script src="js/jquery-3.4.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.4.1.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
