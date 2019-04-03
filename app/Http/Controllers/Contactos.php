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
        if($request->input('ticket_relacionado')!=null){
          if($datos->where('id', '=', $request->input('ticket_relacionado'))->count()>0){
            $datos->nombre=$request->input('nombre');
            $datos->email=$request->input('email');
            $datos->mensaje=$request->input('mensaje');
            $datos->state=0;
            $datos->ticket_relacionado=$request-> input('ticket_relacionado') ? : 0;
            $datos->save();
            return 1;
          }else{
            return 0;
          }
        }
        else{
          $datos->nombre=$request->input('nombre');
          $datos->email=$request->input('email');
          $datos->mensaje=$request->input('mensaje');
          $datos->state=0;
          $datos->ticket_relacionado=$request-> input('ticket_relacionado') ? : 0;
          $datos->save();
          return 1;
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

    public function guardarTicket(Request $request) {
      $request->session()->put('id', $request->input('id'));
      $id = $request->session()->get('id', 'default');
      // $id = session('id');
      return $id;
    }

    public function getTicket(){
      $id = $request->session()->get('id', 'default');
      return $id;
    }

    // De aquí
    public function mostrarCorreoTicketPrevio(Request $request) {
      $id = $request->input('ticketActual');

      $idTicketRelacionado = DB::table('contactos')
      ->select('ticket_relacionado')
      ->where('contactos.id', $id)
      ->first();

      $ticketPrevio=DB::table('contactos')
      ->select('contactos.id','nombre','email','mensaje','estados.estado as estado','state', 'ticket_relacionado')
      ->join('estados','state','=','estados.id')
      ->where('state',0)
      ->where('contactos.id', $idTicketRelacionado->ticket_relacionado)
      ->get();
      //
      // return View('responderCorreosCT',compact('ticketPrevio'));
      return $ticketPrevio;
      // return View::make('resources\views\responderCorreosCT.blade.php')->with('success', 'Data saved!');
    }

    public function mostrarCorreoTicketActual(Request $request) {
      $id = $request->input('ticketActual');
      $ticketReciente=DB::table('contactos')
      ->select('contactos.id','mensaje','estados.estado as estado','state')
      ->join('estados','state','=','estados.id')
      ->where('state',0)
      ->where('contactos.id', $id)
      ->get();
      return $ticketReciente;
    }
    // A aquí
}
