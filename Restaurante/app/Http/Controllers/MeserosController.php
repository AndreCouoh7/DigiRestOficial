<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Mesero;
use Illuminate\Http\Request;

class MeserosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $meseros = Mesero::where('idUsuario', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $meseros = Mesero::latest()->paginate($perPage);
        }

        return view('meseros.index', compact('meseros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $usuarios = Usuario::where('tipo','opcion1')->get();
        
    
        return view('meseros.create',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Mesero::create($requestData);

        return redirect('meseros')->with('flash_message', 'Mesero added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $mesero = Mesero::findOrFail($id);

        return view('meseros.show', compact('mesero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mesero = Mesero::findOrFail($id);
        $usuarios = Usuario::where('tipo','opcion1')->get();
        return view('meseros.edit',array(
            'usuarios' =>$usuarios,
            'mesero' => $mesero
            
        ));

        // return view('meseros.edit', compact('mesero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $mesero = Mesero::findOrFail($id);
        $mesero->update($requestData);

        return redirect('meseros')->with('flash_message', 'Mesero updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Mesero::destroy($id);

        return redirect('meseros')->with('flash_message', 'Mesero deleted!');
    }
}
