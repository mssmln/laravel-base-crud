@extends('layouts.app')

@section('title',"Ireland's cities")

@section('content')
    <h2>città dell'Irlanda</h2>
    @php //@dd($cities) @endphp
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">POPULATION</th>
        <th scope="col">DEEPEN YOUR CURIOSITY</th>
        </tr>
    </thead>
    @foreach($cities as $city)
        <tbody>
            <tr>
            <th scope="row">{{ $city->id }}</th>
            <td>{{ $city->name }}</td>
            <td>{{ $city->population }}</td>
            <td><a href="">details</a></td>
            </tr>
        </tbody>
    @endforeach
    </table>
@endsection