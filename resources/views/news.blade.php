@component('components.header')

@endcomponent

<div class="container marketing" style="padding-top: 5em;">

    <div class="row">
        @foreach ($news  as $new)

      <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/'.$new->immagine)}}"  style="width: 100%;height: 180px;">
            <div class="card-body">
            <h5 class="card-title">{{$new->titolo}}</h5>
            <p class="card-text"><a href="{{$new->link}}" target="blank">{{$new->link}}</a></p>
              <a href="/new/{{$new->id}}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        @endforeach
    </div>

</div>


@component('components.footer')

@endcomponent
