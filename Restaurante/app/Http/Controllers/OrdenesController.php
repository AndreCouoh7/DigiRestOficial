<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Orden;
use Illuminate\Http\Request;

class OrdenesController extends Controller
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
            $ordenes = Orden::where('Numero', 'LIKE', "%$keyword%")
                ->orWhere('idMesa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ordenes = Orden::latest()->paginate($perPage);
        }

        return view('ordenes.index', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ordenes.create');
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
        
        Orden::create($requestData);

        return redirect('ordenes')->with('flash_message', 'Ordene added!');
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
        $ordene = Orden::findOrFail($id);

        return view('ordenes.show', compact('ordene'));
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
        $ordene = Orden::findOrFail($id);

        return view('ordenes.edit', compact('ordene'));
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
        
        $ordene = Orden::findOrFail($id);
        $ordene->update($requestData);

        return redirect('ordenes')->with('flash_message', 'Ordene updated!');
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
        Orden::destroy($id);

        return redirect('ordenes')->with('flash_message', 'Ordene deleted!');
    }
}
