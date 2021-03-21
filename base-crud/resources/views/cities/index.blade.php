@extends('layouts.app')

@section('title',"Ireland's cities")

@section('content')
    <h2>città dell'Irlanda</h2>
    @php //@dd($cities) @endphp
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif


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
                <td>
                    <button class="btn btn-outline-info"><a href="{{ route('cities.show',['city' => $city->id ]) }}">details</a></button>
                    <button class="btn btn-outline-warning"><a href="{{ route('cities.edit',['city' => $city->id ]) }}">edit</a></button>
                    <form class="d-inline" method="post" action="{{ route('cities.destroy',$city->id) }}">
                        @csrf 
                        @method('DELETE') 
                        <button class="btn btn-outline-danger">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection