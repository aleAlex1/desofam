<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contacto;
use DB;
use App\Http\Controllers\Contactos;


class Contactos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Estaba probando esto
      $ticketsitos=DB::table('contactos')
      ->select('contactos.id','nombre','email','mensaje','estados.estado as estado','state', 'ticket_relacionado')
      ->join('estados','state','=','estados.id')
      ->where('state',0)
      ->where('contactos.ticket_relacionado','>',0)
      ->get();
      return view('tickets',compact('ticketsitos'));
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
        $datos=new Contacto();

        $datos->nombre=$request->input('nombre');
        $datos->email=$request->input('email');
        $datos->mensaje=$request->input('mensaje');
        $datos->ticket_relacionado=$request-> input('ticket_relacionado') ? : 0;


        // $datos->ticket_relacionado=$request->input('ticket_relacionado');

        $datos->save();
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
