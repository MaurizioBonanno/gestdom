@extends('admin.templetes.layout')

@section('content')
<h1>Tipologie</h1>
@if(session()->has('message'))
<div class="alert-info alert-dismissible fade show">
    {{session()->get('message')}}
</div>
@endif

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Tipologia</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <form>
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">

      @foreach ($tipologie as $tipologia)
        <tr id="{{$tipologia->id}}">
          <td>{{$tipologia->tipologia}}</td>
          <td>
            <a href="tipologie/{{$tipologia->id}}/edit" class="btn btn-primary btn-small">edit</a>
          </td>
        </tr>

      @endforeach

      </form>
    </tbody>
  </table>

@endsection
