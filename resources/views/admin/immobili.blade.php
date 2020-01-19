@extends('admin.templetes.layout')


@section('content')
<h1>Immobili</h1>

<a class="btn btn-primary" href="add_immobile">AGGIUNGI</a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Tipo</th>
        <th scope="col">Metri</th>
        <th scope="col">Camere</th>
        <th scope="col">Bagni</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Immagine</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <form>
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">

      @foreach ($immobili as $immobile)
        <tr id="{{$immobile->id}}">
          <td>{{$immobile->titolo}}</td>
          <td>{{$immobile->descrizione}}</td>
          <td>{{$immobile->tipologia}}</td>
          <td>{{$immobile->metri}}</td>
          <td>{{$immobile->camere}}</td>
          <td>{{$immobile->bagni}}</td>
          <td>{{$immobile->indirizzo}}</td>
          <td>{{$immobile->prezzo}}</td>
          <td> <img width="100" height="auto" src="{{asset('storage/'.$immobile->immagine)}}" alt="{{$immobile->immagine}}">  </td>
          <td>
            <a href="immobili/{{$immobile->id}}/edit" class="btn btn-primary btn-small">edit</a>
          <a href="iimmo_aadim/immobile_delete/{{$immobile->id}}" name="{{$immobile->id}}" class="btn btn-danger btn-small">Delete</a>
          </td>
        </tr>

      @endforeach

      </form>
    </tbody>
  </table>

  <script>
    $(function(){
        $('td').on('click','a.btn-danger',function(ele){
            ele.preventDefault();
            var url = $(this).attr('href');
            var id = $(this).attr('name');
            $.ajax(
                url,
                {
                    method: 'DELETE',
                    data: {
                        '_token': $('#_token').val()
                    },
                    complete: function(resp){
                        if(resp.responseText == 1){
                            $('#'+id).remove();
                        }else{
                            alert(resp);
                        }
                    }
                }
            )
        });
    });
    </script>

@endsection
