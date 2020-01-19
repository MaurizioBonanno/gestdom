@extends('admin.templetes.layout')

@section('content')
<h1>News</h1>
<a href="/admin/insert_new" class="btn btn-primary">Aggiungi New</a>
<hr>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Immagine</th>
        <th scope="col">Link</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <form>
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">

      @foreach ($news as $new)
        <tr id="{{$new->id}}">
          <td>{{$new->titolo}}</td>
          <td>{{$new->descrizione}}</td>
        <td> <img width="100" height="auto" src="{{asset($new->path)}}" alt="{{$new->path}}"> </td>
          <td>{{$new->link}}</td>
          <td>
            <a href="news/{{$new->id}}/edit" class="btn btn-primary btn-small">edit</a>
          <a href="news/{{$new->id}}" name="{{$new->id}}" class="btn btn-danger btn-small">Delete</a>
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
                        alert('Errore sul server');
                    }
                }
            }
        )
    });
});
</script>

@endsection
