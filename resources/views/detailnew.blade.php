
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
<div class="container marketing" style="padding-top: 5em;">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{asset('storage/'.$new->immagine)}}" class="d-block w-100" alt="{{$new->immagine}}">
      </div>
    </div>
    <div class="row">
        <div class="col-12">
           <h1>{{ $new->titolo }}</h1>
        </div>
        <hr>
        <div class="col-12">
           <h5>{{$new->descrizione}}</h5>
        </div>
        <hr>
        <br>
        <div class="col-12">
           articolo originale da:<a href="{{$new->link}}" target="blank"{{$new->link}}</a>
        </div>

    </div>
  </div>

  <h3> <a href="/news" class="btn btn-primary"><-Torna a NEWS</a></h3>

</div>

