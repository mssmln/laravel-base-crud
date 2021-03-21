@extends('layouts.app')

@section('title',"edit selected city")

@section('content')
    <h2>you are just about to edit this city</h2>
    @php //@dd($id_cities) @endphp

    <form class="container" method="post" action="{{ route('cities.update',$id_cities->id) }}"> 
        @csrf 
        @method('PUT') 
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $id_cities->name }}">
        </div>
        <div class="form-group">
            <label for="population">population</label>
            <input type="number" class="form-control" name="population" id="population" value="{{ $id_cities->population }}">
        </div>
        <div class="form-group">
            <label for="area">area</label>
            <input type="number" class="form-control" name="area" id="area" value="{{ $id_cities->area }}">
        </div>
        <div class="form-group">
            <label for="weather">weather</label>
            <select class="form-control" name="weather" id="weather">
                <option>select your weather</option>
                <option value="dry" {{ $id_cities->weather == 'dry' ? 'selected=selected' : ''}}>dry</option>
                <option value="foggy" {{ $id_cities->weather == 'foggy' ? 'selected=selected' : ''}}>foggy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="area_code">area code</label>
            <input type="text" class="form-control" name="area_code" id="area_code" value="{{ $id_cities->area_code }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection