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

    public function valida(Request $request){
        $request->validate([
            'name' => 'required|unique:cities|max:20',
            'population' => 'required|max:20',
            'area' => 'required|max:4',
            'weather' => 'nullable|max:50',
            'area_code' => 'required|unique:cities|max:10'
        ]);
    }


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
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); // "->" rather than :: as it is not a class but an instance
        //dd($data); it worked smoothly
        $this->valida($request);

        //create a new instance to save up data
        $new_city = new City();
        //$new_city->name = $data['name'];
        //$new_city->population = $data['population'];
        //$new_city->area = $data['area'];
        //$new_city->weather = $data['weather']; 
        //$new_city->area_code = $data['area_code'];
        $new_city->fill($data); //che si aggancia a $fillable nel file model e sostituisce l'assegnazione per ciascuna colonna, vedi codice sopra commentato.

        $new_city->save();
        //dd($new_city); it worked seamlessly

        return redirect()->route('cities.index');

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
    public function edit(City $city)
    {
        //dd($city); // it worked smoothly
        //scrivere City $city tra () equivale a scrivere $city = City::find($id) per come è stato programmato Laravel, come invece hai fatto nella funzione show, $city può essere rinominato come preferisci

        if ($city){ 
            $data = [
                'id_cities' => $city
            ];
            return view('cities.edit',$data); 
        }
        abort('404'); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $data = $request->all();
        $city->update($data);

        return redirect()->route('cities.index',$city);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('status','the city has been removed permanently');

    }
}
