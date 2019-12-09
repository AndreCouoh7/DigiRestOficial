<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Cajero;
use App\Pago;
use App\Ticket;
use Illuminate\Http\Request;

class PagosController extends Controller
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
            $pagos = Pago::where('cantidadPago', 'LIKE', "%$keyword%")
                ->orWhere('fechaPago', 'LIKE', "%$keyword%")
                ->orWhere('idCajero', 'LIKE', "%$keyword%")
                ->orWhere('idCliente', 'LIKE', "%$keyword%")
                ->orWhere('idTicket', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pagos = Pago::latest()->paginate($perPage);
        }

        return view('pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $clientes= Cliente::All();
        $cajeros= Cajero::All();
        $tickets=Ticket::All();
        return view('pagos.create', array(
            'clientes'=> $clientes,
            'cajeros'=>$cajeros,
            'tickets'=>$tickets 
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
        
        Pago::create($requestData);

        return redirect('pagos')->with('flash_message', 'Pago added!');
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
        $pago = Pago::findOrFail($id);

        return view('pagos.show', compact('pago'));
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
        $pago = Pago::findOrFail($id);
        $tickets=Ticket::All();
        $cajeros=Cajero::All();
        $clientes=Cliente::All();
        return view ('pagos.edit', array(
            'clientes'=> $clientes,
            'cajeros'=>$cajeros,
            'tickets'=>$tickets,
            'pago'=>$pago
        ));
        return view('pagos.edit', compact('pago'));
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
        
        $pago = Pago::findOrFail($id);
        $pago->update($requestData);

        return redirect('pagos')->with('flash_message', 'Pago updated!');
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
        Pago::destroy($id);

        return redirect('pagos')->with('flash_message', 'Pago deleted!');
    }
}
