<?php

namespace App\Http\Controllers;

use DB;

use App\Project;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //esta es una forma de obtener datos de la base de datos

        // $portafolio = DB::table('projects')->get();

        //de esta forma se hace con el orm de laravel, se crea el modelo 'project' y lo ordenamos

        // $portafolio = Project::orderBy('created_at', 'DESC')->get();

        //esta forma lo hace descendente simplemente hay que decirle la columna, por defecto lo hace en created_at

        // $portafolio = Project::latest('updated_at')->get();

        // // para paginar:
        // $projects = Project::latest('updated_at')->paginate();


        return view('portafolio', [

            'projects' => Project::latest()->paginate()

        ]);
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
