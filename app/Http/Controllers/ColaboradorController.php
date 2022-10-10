<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Http\Requests\StoreColaboradorRequest;
use App\Http\Requests\UpdateColaboradorRequest;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = array();

        $data["colaboradores"] = Colaborador::all();
        return view("dashboard.colaboradores.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.colaboradores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColaboradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColaboradorRequest $request)
    {
        //
        $new_colaborador = new Colaborador($request->all());
        $new_colaborador->save();
        return redirect(route("colaboradores.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaborador)
    {
        //
        return json_encode($colaborador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {
        //
        $idColaborador=$colaborador->id;
        $colaborador2=Colaborador::findOrFail($idColaborador);
        //return view('colaborador.edit',compact('$colaborador2'));
        return $colaborador2;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColaboradorRequest  $request
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColaboradorRequest $request, Colaborador $colaborador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        //
        $colaborador->delete();
        return back()->with(["status" => "ok", "message" => "Colaborador eliminado con éxito!"]);
    }
}
