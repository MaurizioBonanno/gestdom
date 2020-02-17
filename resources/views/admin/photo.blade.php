@extends('admin.templetes.layout')

@section('content')
<h1>Photos</h1>
<form action="/admin/add_photo/{{$id_immobile}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
   <!-- <input type="hidden" name="_method" value="PATCH">-->
    <input type="file" name="immagine[]" id="immagine" class="form-group" multiple>
    <input type="submit" class="btn-small btn-primary" value="Aggiungi">

</form>

<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/basic.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<form action="/admin/add_photo/{{$id_immobile}}" method="POST" enctype="multipart/form-data" class="dropzone"
 id="dropZoneForm">
 <div class="fallback">
     <input type="file" name="immagine[]" multiple>
     <input type="submit" value="upload">
 </div>
 {{csrf_field()}}
</form>
-->
<hr>
      <form>
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">
<table class="table table-striped">
    <thead>
        <tr class="home">
            <th>
                Photo
            </th>
            <th>
                Elimina
            </th>
        </tr>
    </thead>
    <tbody>
      @foreach ($images as $image)

        <tr id="id_{{$image->id}}">
            <td>
             <li id="{{$image->id}}" style="list-style:none">  <img width="100" height="auto" src="{{asset('/storage/'.$image->path)}}" alt="{{$image->path}}">
            </td>
            <td>
             <li id="{{$image->id}}" style="list-style:none">    <a href="/admin/delete_photo/{{$image->id}}" name="{{$image->id}}" class="btn btn-danger btn-small">Delete</a>
            </td>
        </tr>


       </li>
      @endforeach

      </form>
    </tbody>
  </table>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                      //  $('li#'+id).remove();
                      $('tr#'+id).remove();
                    }else{
                        alert('Errore sul server');
                    }
                }
            }
        )
    }
    });


});

  $('tbody').sortable({
        items: "tr:not('.home')",
        placeholder: "ui-state-hightlight",
        update: function(){
          var url = '/admin/reorder_gallery';
          var ids = $('tbody').sortable("serialize");
          $.post(url,ids,function(data){
              console.log(data);
          });
          console.log(url+'?'+ids);
      }
  })

    //Dropzone
    Dropzone.options.dropZoneForm = {
        acceptedFiles: "image/*",
        init: function(){
            this.on('queuecomplete',function(){

                setTimeout(function(){
                    location.reload()
                },10000)

            })
        }
    }
</script>

@endsection
