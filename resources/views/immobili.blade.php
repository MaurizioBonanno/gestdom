@component('components.header')

@endcomponent
<style>
    .image_casa {
      width: 100%;
      height: auto;
    }
    .order-md-2 {
      text-align: right;
    }
    body{
        color: aliceblue;
    }
    .text-muted{
        color: aliceblue;
    }
  </style>
<div class="container marketing" style="padding-top: 5em;">

    <p>
      <h4>  Non tutti gli Immobili in vendita sono visibili, nel pieno rispetto della volontà dei Clienti.
<br>
         Vengono pertanto proposti mediante un'attività di consulenza Personalizzata.</h4>
     </p>

    @foreach ($immobili as $immobile)

    <hr class="featurette-divider">

     <div class="row featurette">

        <div class="col-md-7">
        <h2 class="featurette-heading">{{$immobile->titolo}} / <span>{{$immobile->tipologia}}</span></h2>

        <p class="lead">Metri: {{$immobile->metri}} </p>
        <p class="lead">Camere: {{$immobile->camere }} </p>
        <p class="lead">Bagni:{{$immobile->bagni}} </p>
        <p class="lead">Prezzo: €  {{$immobile->prezzo}} </p>
        <a href="/casa/{{$immobile->id}}" class="btn btn-primary">Dettagli</a>
     </div>
     <div class="col-md-5">
     <img class="image_casa" src="{{asset('storage/'.$immobile->immagine)}}" alt="{{$immobile->immagine}}">
     </div>
</div>

    @endforeach

</div>



@component('components.footer')

@endcomponent
