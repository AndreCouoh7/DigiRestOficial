<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Direccion;
use Illuminate\Http\Request;

class DireccionesController extends Controller
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
            $direcciones = Direccion::where('idContacto', 'LIKE', "%$keyword%")
                ->orWhere('cp', 'LIKE', "%$keyword%")
                ->orWhere('municipio', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('localidad', 'LIKE', "%$keyword%")
                ->orWhere('calle', 'LIKE', "%$keyword%")
                ->orWhere('numeroInterior', 'LIKE', "%$keyword%")
                ->orWhere('numeroExterior', 'LIKE', "%$keyword%")
                ->orWhere('cruzamiento', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $direcciones = Direccion::latest()->paginate($perPage);
        }

        return view('direcciones.index', compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('direcciones.create');
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
        
        Direccion::create($requestData);

        return redirect('direcciones')->with('flash_message', 'Direccione added!');
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
        $direccione = Direccion::findOrFail($id);

        return view('direcciones.show', compact('direccione'));
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
        $direccione = Direccion::findOrFail($id);

        return view('direcciones.edit', compact('direccione'));
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
        
        $direccione = Direccion::findOrFail($id);
        $direccione->update($requestData);

        return redirect('direcciones')->with('flash_message', 'Direccione updated!');
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
        Direccion::destroy($id);

        return redirect('direcciones')->with('flash_message', 'Direccione deleted!');
    }
}
