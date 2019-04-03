<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use App\Empleado;
use Illuminate\Support\Facades\Redirect;

class Usuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=DB::table('grupos')
        ->select('*')
        ->where('id','>',0)
        ->where('status',0)
        ->get();
        return view('add', compact('groups'));
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
        $this->validate($request,[
          'mail' => 'unique:users,email'
        ]);
        if($request->input('group')==1){
          $admin = User::where('grupo',1)->count(); //contar administradores
          if($admin+1 ==2){
            \DB::table('grupos')
              ->where('id', 1)
              ->update(['status' => 1]);
          }
        }
        $data=new User();
        $data->name=$request->input('name');
        $data->email=$request->input('mail');
        $data->password=encrypt($request->input('pass')); //encriptar contraseña
        $data->grupo=$request->input('group');
        $data->save();
        $id = $data->id;

        $emp=new Empleado();
        $emp->name=$request->input('name');
        $emp->address=$request->input('direc');
        $emp->phone=$request->input('tel');
        $emp->usuario=$id;
        $emp->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $groups=DB::table('grupos')
      ->select('*')
      ->where('id','>',0)
      ->where('status',0)
      ->get();

      $user=DB::table('users')
      ->select('users.id','users.name','email','password','grupo','address','phone')
      ->join('empleados', 'usuario','=','users.id')
      ->where('users.id',$id)
      ->get();
      $user[0]->password = decrypt($user[0]->password);

      return view('edit',compact('groups','user'));
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

    public function getUsers(){

      $usr= DB::table('users')
      ->select('users.id','users.name','email','grupos.nombre as group','address','phone')
      ->join('grupos', 'grupos.id','=','users.grupo')
      ->join('empleados', 'usuario','=','users.id')
      ->where('grupo','>',0)
      ->get();
      return view('show',compact('usr'));
    }

    public function editar($id)
    {
      $groups=DB::table('grupos')
      ->select('*')
      ->where('id','>',0)
      ->get();

      $user=DB::table('users')
      ->select('users.id','users.name','email','password','grupo','address','phone')
      ->join('empleados', 'usuario','=','users.id')
      ->where('users.id',$id)
      ->get();
      $user[0]->password = decrypt($user[0]->password);

      return view('editarUser',compact('groups','user'));
    }

    public function saveEdit(Request $request, $id){
      \DB::table('users')
        ->where('id', $id)
        ->update(['name' => $request->input('name')]);
        if($request->input('pass')){
          \DB::table('users')
            ->where('id', $id)
            ->update(['password' => encrypt($request->input('pass'))]);
        }

      \DB::table('empleados')
        ->where('usuario', $id)
        ->update(['name' => $request->input('name'), 'address' => $request->input('direc'),'phone' => $request->input('tel')]);

      if($request->input('anterior')!=$request->input('group')){ //si cambió el tipo de usuario
        $admin = User::where('grupo',1)->count();//contar cuántos admin hay

        if($request->input('group')==1){ //si ahora es admin
          if($admin<2){ //si hay menos de dos admin, puede entrar
            \DB::table('users')
              ->where('id', $id)
              ->update(['grupo' => $request->input('group')]);
          }
          if($admin+1==2){
            \DB::table('grupos')
              ->where('id', $request->input('group'))
              ->update(['status' => 1]);
          }
        }//if($request->input('group')==1)

        if($request->input('group')==2){ //si ahora es empleado normal

          if($admin-1<1){
            return redirect('editarUser')->with('error', 'No se puede dejar sin administrador');
          }
          else{
            \DB::table('grupos')
              ->where('id', 1)
              ->update(['status' => 0]);
            \DB::table('users')
              ->where('id', $id)
              ->update(['grupo' => $request->input('group')]);
          }

        }//if($request->input('group')==2)

      }//if($request->input('anterior')!=$request->input('group'))

    }//public function saveEdit

}
