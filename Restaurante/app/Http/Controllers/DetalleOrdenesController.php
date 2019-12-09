<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DetalleOrden;
use App\Orden;
use App\Producto;
use Illuminate\Http\Request;

class DetalleOrdenesController extends Controller
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
            $detalleordenes = DetalleOrden::where('idOrden', 'LIKE', "%$keyword%")
                ->orWhere('idProducto', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detalleordenes = DetalleOrden::latest()->paginate($perPage);
        }

        return view('detalle-ordenes.index', compact('detalleordenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $orden = Orden::All();
        $producto = Producto::All();
        return view('detalle-ordenes.create',compact('orden','producto'));
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
        
        DetalleOrden::create($requestData);

        return redirect('detalle-ordenes')->with('flash_message', 'DetalleOrdene added!');
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
        $detalleordene = DetalleOrden::findOrFail($id);

        return view('detalle-ordenes.show', compact('detalleordene'));
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
        $detalleordene = DetalleOrden::findOrFail($id);
        $orden = Orden::All();
        $producto = Producto::All();
        return view('detalle-ordenes.edit', compact('detalleordene','orden','producto'));
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
        
        $detalleordene = DetalleOrden::findOrFail($id);
        $detalleordene->update($requestData);

        return redirect('detalle-ordenes')->with('flash_message', 'DetalleOrdene updated!');
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
        DetalleOrden::destroy($id);

        return redirect('detalle-ordenes')->with('flash_message', 'DetalleOrdene deleted!');
    }
}
