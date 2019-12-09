<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asignacion;
use App\Mesero;
use App\Mesa;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
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
            $asignaciones = Asignacion::where('fechaAsignacion', 'LIKE', "%$keyword%")
                ->orWhere('idMesa', 'LIKE', "%$keyword%")
                ->orWhere('idMesero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $asignaciones = Asignacion::latest()->paginate($perPage);
        }

        return view('asignaciones.index', compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $mesas = Mesa::All();
        $meseros = Mesero::All();
        return view('asignaciones.create',array(
            'mesas' => $mesas,
            'meseros' => $meseros
        ));

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
        
        Asignacion::create($requestData);

        return redirect('asignaciones')->with('flash_message', 'Asignacione added!');
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
        $asignacione = Asignacion::findOrFail($id);

        return view('asignaciones.show', compact('asignacione'));
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
        $asignacione = Asignacion::findOrFail($id);
           
        $mesas = Mesa::All();
        $meseros = Mesero::All();
        return view('asignaciones.edit',array(
        'mesas' => $mesas,
        'meseros' => $meseros,
        'asignacione' => $asignacione
        ));


        // return view('asignaciones.edit', compact('asignacione','mesas','meseros'));
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
        
        $asignacione = Asignacion::findOrFail($id);
        $asignacione->update($requestData);

        return redirect('asignaciones')->with('flash_message', 'Asignacione updated!');
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
        Asignacion::destroy($id);

        return redirect('asignaciones')->with('flash_message', 'Asignacione deleted!');
    }
}
