<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City; // colleghiamo il suo model, di default da App\NomeModel

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities_data = City::all(); // retrieve data from dbcities
        //dd($cities_data); it worked smoothly
        $data = [
            'cities' => $cities_data
        ];

        return view('cities.index',$data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cities_data = City::find($id); // come nel progetto Molisana ma leggermente diverso

        if ($cities_data){ // se esiste
            $data = [
                'id_cities' => $cities_data
            ];
            return view('cities.show',$data); // usiamo il nome della rotta, crea il file show.blade.php dentro cities folder 
        }
        abort('404'); // se non esiste, anche senza else
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
