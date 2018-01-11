<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','ASC')->paginate(5);
        return view('admin.categories.index')->with('categories',$categories);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $file = $request->file('image');
            $imginame = 'category_' . time() . '.' .$file->getClientOriginalExtension();
            //El public_path nos ubica en la carpeta public del proyecto
            $path = public_path() . '/img/categories/';
            //La funcion move nos los guarda en la carpeta declarada en el path
            $file->move($path,$imginame);


            $category = new category($request->all());
            $category->image = $imginame;
            $category->save();
            return redirect()->route('categories.index')-> with('mensaje',"Se ha registrado la categoria $category->name correctamente ");
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
        $category = Category::find($id);
        return view('admin.categories.edit')-> with( 'category',$category);
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
            $category = Category::find($id);
            $category->name =  $request->get('name');

            if ($request->hasFile('image'))
            {
                //obtengo la imagen
                $file = $request->file('image');
                //Personalizo como se llamara
                $name = 'category_' .time() . '.'  .$file->getClientOriginalExtension();

                //Almaceno  en la carpeta public/images/movements
                $path = public_path() . '/img/categories/';
                //Mover el archivo generado en $name al destino $path
                $file->move($path,$name);
                // Guarda la ruta de la imagen en el campo image
                $category->image = $name;
            }
        $category->save();
        return redirect()->route('categories.index')-> with('mensaje2',"La categoria $category->name ha sido editado con éxito ! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category-> delete();

        return redirect()->route('categories.index')-> with('mensaje1',"Se ha eliminado a $category->name correctamente ");
    }
}
