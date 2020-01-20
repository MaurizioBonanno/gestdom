@component('components.header')

@endcomponent

<div class="container marketing" style="padding-top: 5em;">

    <div class="row">
        @foreach ($news  as $new)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
               <img src="{{asset('storage/'.$new->immagine)}}" style="width: 100%;height: auto;">
                  <div class="card-body">
                    <p class="card-text"> {{$new->titolo}}  <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/new/{{$new->id}}"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                        </div>
                    <small class="text-muted">{{$new->created_at}}</small>
            </div>
        </div>

        @endforeach
    </div>

</div>


@component('components.footer')

@endcomponent
