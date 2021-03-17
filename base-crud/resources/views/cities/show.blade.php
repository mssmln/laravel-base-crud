@extends('layouts.app')

@section('title','detailed city')

@section('content')
    <h2>approfondimenti della città selezionata</h2>
    <table class="table">
    @php //@dd($id_cities) it worked @endphp
    <thead>
        <tr>
        <th scope="col">AREA</th>
        <th scope="col">WEATHER</th>
        <th scope="col">AREA CODE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $id_cities->area }}</td>
        <td>{{ $id_cities->weather }}</td>
        <td>{{ $id_cities->area_code }}</td>
        </tr>
    </tbody>
    </table>
@endsection