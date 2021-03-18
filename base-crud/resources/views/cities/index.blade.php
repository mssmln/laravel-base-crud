@extends('layouts.app')

@section('title',"Ireland's cities")

@section('content')
    <h2>città dell'Irlanda</h2>
    @php //@dd($cities) @endphp
    <button><a href="{{ route('cities.create') }}">add a new city</a></button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">POPULATION</th>
        <th scope="col">DEEPEN YOUR CURIOSITY</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
            <tr>
            <th scope="row">{{ $city->id }}</th>
            <td>{{ $city->name }}</td>
            <td>{{ $city->population }}</td>
            <td><a href="{{ route('cities.show',['city' => $city->id ]) }}">details</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection