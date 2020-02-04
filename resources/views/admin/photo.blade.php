@extends('admin.templetes.layout')

@section('content')
<h1>Photos</h1>
<form action="/admin/add_photo/{{$id_immobile}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <input type="file" name="immagine" id="immagine" class="form-group">
    <input type="submit" class="btn-small btn-primary" value="Aggiungi">

</form>
<hr>
      <form>
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">
<ul>
      @foreach ($images as $image)
     <li id="{{$image->id}}">
         <img width="100" height="auto" src="{{asset('/storage/'.$image->path)}}" alt="{{$image->path}}">
         <a href="/admin/delete_photo/{{$image->id}}" name="{{$image->id}}" class="btn btn-danger btn-small">Delete</a>
       </li>
      @endforeach
</ul>
      </form>
    </tbody>
  </table>

<script>
$(function(){
    $('li').on('click','a.btn-danger',function(ele){
        ele.preventDefault();
        if(confirm('Davvero vuoi cancellare la foto?')){
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
    }
    });
});
</script>

@endsection
