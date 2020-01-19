@extends('admin.templetes.layout')


@section('content')
<h1>Edit News</h1>
<form action="/admin/updated_new/{{$new->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="{{$new->titolo}}" class="form-control">
            <label for="descrizione">Articolo</label><br>
            <textarea class="form-group" name="descrizione" id="descrizione">{{$new->descrizione}}</textarea>
            <br>
            <img src="{{$new->immagine}}" alt=""><br>
            <label for="link">Link</label>
            <input type="text" name="link" id="link" value="{{$new->link}}" class="form-control" >
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group">
    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
