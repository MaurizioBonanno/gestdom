@extends('admin.templetes.layout')


@section('content')
<h1>Edit News</h1>
<form action="/admin/updated_immobile/{{$immobile->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="{{$immobile->titolo}}" class="form-control">

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3">{{$immobile->descrizione}}</textarea>
            </div>
            <br>
            <img src="{{$immobile->immagine}}" alt=""><br>
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group"><br>

            <div class="form-group">
                <label for="tiplogia">Tipologia</label>
                <select class="form-control" id="tipologia" name="tipologia">

                @foreach ($tipologie as $tipologia)

                 @if ($immobile->tipologia === $tipologia->tipologia)
                     <option value="{{$tipologia->id}}" selected="selected">{{$tipologia->tipologia}}</option>
                 @else
                     <option value="{{$tipologia->id}}">{{$tipologia->tipologia}}</option>
                 @endif

                @endforeach
                </select>
              </div>
            <label for="link">Metri</label>
            <input type="text" name="metri" id="metri" value="{{$immobile->metri}}" class="form-control" >
            <label for="link">Bagni</label>
            <input type="text" name="bagni" id="bagni" value="{{$immobile->bagni}}" class="form-control" >
            <label for="link">Camere</label>
            <input type="text" name="camere" id="camere" value="{{$immobile->camere}}" class="form-control" >
            <label for="link">Indirizzo</label>
            <input type="text" name="indirizzo" id="indirizzo" value="{{$immobile->indirizzo}}" class="form-control" >
            <label for="link">Prezzo</label>
            <input type="text" name="prezzo" id="prezzo" value="{{$immobile->prezzo}}" class="form-control" >

    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
