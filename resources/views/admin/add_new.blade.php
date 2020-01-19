@extends('admin.templetes.layout')


@section('content')
<h1>Add New</h1>
<form action="/admin/save_new" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" placeholder="Titolo" class="form-control">
            <label for="descrizione">Articolo</label><br>
            <textarea class="form-group" name="descrizione" id="descrizione"></textarea>
            <br>
            <label for="link">Link</label>
            <input type="text" name="link" id="link" placeholder="Link" class="form-control" >
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group">
    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
