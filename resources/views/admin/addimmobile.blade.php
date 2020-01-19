@extends('admin.templetes.layout')


@section('content')
<h1>Edit News</h1>
<form action="/admin/saveimmobile" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" placeholder="titolo" class="form-control" required>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3" required></textarea>
            </div>
            <br>
            <img name="thumb" src="" alt=""><br>
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group" required><br>

            <div class="form-group">
                <label for="tiplogia">Tipologia</label>
                <select class="form-control" id="tipologia" name="tipologia">

                @foreach ($tipologie as $tipologia)
                     <option value="{{$tipologia->id}}">{{$tipologia->tipologia}}</option>
                @endforeach
                </select>
              </div>
            <label for="link">Metri</label>
            <input type="text" name="metri" id="metri"  class="form-control" required>
            <label for="link">Bagni</label>
            <input type="text" name="bagni" id="bagni"  class="form-control" required >
            <label for="link">Camere</label>
            <input type="text" name="camere" id="camere"  class="form-control" required >
            <label for="link">Indirizzo</label>
            <input type="text" name="indirizzo" id="indirizzo"  class="form-control" required >
            <label for="link">Prezzo</label>
            <input type="text" name="prezzo" id="prezzo"  class="form-control" required >

    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
