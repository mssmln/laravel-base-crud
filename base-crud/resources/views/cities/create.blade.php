@extends('layouts.app')

@section('title','create a new city')

@section('content')
    <h2 class="container">Fill in a new city</h2>

    <form class="container" method="post"> @php metodo post per l'invio dei dati in maniera sicura rispetto al get @endphp
        @csrf @php //serve per generare un token @endphp
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="population">population</label>
            <input type="number" class="form-control" name="population" id="population">
        </div>
        <div class="form-group">
            <label for="area">area</label>
            <input type="number" class="form-control" name="area" id="area">"
        </div>
        <div class="form-group">
            <label for="weather">weather</label>
            <input type="text" class="form-control" name="weather "id="weather">
        </div>
        <div class="form-group">
            <label for="area-code">area code</label>
            <input type="number" class="form-control" name="area_code" id="area-code">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection