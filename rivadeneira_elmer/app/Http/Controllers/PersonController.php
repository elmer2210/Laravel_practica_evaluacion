<?php

namespace App\Http\Controllers;
use App\Http\Resources\PersonResourse;
use App\Model\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=Person::all();
        return PersonResourse::collection($people);
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
        $person = new Person();
        $person->nombreUsuario=$request->nombreUsuario;
        $person->nombreCompleto=$request->nombreCompleto;
        $person->email=$request->email;
        $person->telefono=$request->telefono;
        $person->edad=$request->edad;
        $person->fechaNacimiento=$request->fechaNacimiento;
        if($person->save()){
            return new PersonResourse($person);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $person=Person::findOrFail($id);
        $person->nombreCompleto=$request->nombreCompleto;
        $person->email=$request->email;
        $person->telefono=$request->telefono;
        $person->edad=$request->edad;
        if($person->save()){
            return new PersonResourse($person);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person=Person::findOrFail($id);

        if($person->delete()){
            return new PersonResourse($customer);
        }
    }
}
