<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreUser;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')-> with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $imginame="";
        if ($request->file('imginame'))
        {
                $file = $request->file('imginame');
                $imginame = 'user_' . time() . '.' .$file->getClientOriginalExtension();
                //El public_path nos ubica en la carpeta public del proyecto
                $path = public_path() . '/img/users/';
                //La funcion move nos los guarda en la carpeta declarada en el path
                $file->move($path,$imginame);
         }


        $user = new User($request->all());
        $user->imginame = $imginame;
        $user->password = bcrypt($request->password);


        $user->save();
        return redirect()->route('users.index')-> with('mensaje',"Se ha registrado a $user->name correctamente ");
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

        $user = User::find($id);
        return view('admin.users.edit')-> with( 'user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, $id)

    {

        $user = User::find($id);
        $user-> name =  $request->name;
        $user-> apellido =  $request->apellido;
        $user-> email =  $request->email;
        $user-> dni =  $request->dni;
        $user-> edad =  $request->edad;
        $user-> type =  $request->get('type');
//      $user-> imginame =  $request->imginame;


        $user->save();
        return redirect()->route('users.index')-> with('mensaje2',"El usuario $user->name ha sido editado con éxito ! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user-> delete();


        return redirect()->route('users.index')-> with('mensaje1',"Se ha eliminado a $user->name correctamente ");
    }
}
