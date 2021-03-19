@extends('layouts.app')

@section('title','create a new city')

@section('content')
    <h2 class="container">Fill in a new city</h2>
    @php //@dd($errors) mostra un array vuoto se non ci sono errori @endphp
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="container" method="post" action="{{ route('cities.store') }}"> @php //metodo post per l'invio dei dati in maniera sicura rispetto al get @endphp
        @csrf @php //serve per generare un token @endphp
        @method('POST') @php // per laravel @endphp
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
            <input type="number" class="form-control" name="area" id="area">
        </div>
        <div class="form-group">
            <label for="weather">weather</label>
            <select class="form-control" name="weather" id="weather">
                @php //con selected mostriamo il messaggio al caricamento della pagina nella select @endphp
                <option selected>select your weather</option>
                <option value="dry">dry</option>
                <option value="foggy">foggy</option>
            </select>
            @php //<input type="text" class="form-control" name="weather" id="weather"> @endphp
        </div>
        <div class="form-group">
            <label for="area-code">area code</label>
            <input type="number" class="form-control" name="area_code" id="area-code">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection