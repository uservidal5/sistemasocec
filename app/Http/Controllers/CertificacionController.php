<?php

namespace App\Http\Controllers;

use App\Models\Certificacion;
use App\Http\Requests\StoreCertificacionRequest;
use App\Http\Requests\UpdateCertificacionRequest;

class CertificacionController extends Controller
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

        $data["certificaciones"] = Certificacion::all();
        return view("dashboard.certificaciones.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.certificaciones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCertificacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificacionRequest $request)
    {
        //
        $new_certificacion = new Certificacion($request->all());
        $new_certificacion->save();
        return redirect(route("certificaciones.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacion $certificacion)
    {
        //
        return json_encode($certificacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificacion $certificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificacionRequest  $request
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificacionRequest $request, Certificacion $certificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacion $certificacion)
    {
        //
    }
}
