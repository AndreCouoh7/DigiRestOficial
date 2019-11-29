<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cajero;
use Illuminate\Http\Request;

class CajerosController extends Controller
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
            $cajeros = Cajero::where('idUsuario', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cajeros = Cajero::latest()->paginate($perPage);
        }

        return view('cajeros.index', compact('cajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cajeros.create');
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
        
        Cajero::create($requestData);

        return redirect('cajeros')->with('flash_message', 'Cajero added!');
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
        $cajero = Cajero::findOrFail($id);

        return view('cajeros.show', compact('cajero'));
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
        $cajero = Cajero::findOrFail($id);

        return view('cajeros.edit', compact('cajero'));
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
        
        $cajero = Cajero::findOrFail($id);
        $cajero->update($requestData);

        return redirect('cajeros')->with('flash_message', 'Cajero updated!');
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
        Cajero::destroy($id);

        return redirect('cajeros')->with('flash_message', 'Cajero deleted!');
    }
}
