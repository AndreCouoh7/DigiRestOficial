<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Silla;
use Illuminate\Http\Request;

class SillasController extends Controller
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
            $sillas = Silla::where('numeroSilla', 'LIKE', "%$keyword%")
                ->orWhere('mesaCorresponde', 'LIKE', "%$keyword%")
                ->orWhere('idMesa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sillas = Silla::latest()->paginate($perPage);
        }

        return view('sillas.index', compact('sillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('sillas.create');
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
        
        Silla::create($requestData);

        return redirect('sillas')->with('flash_message', 'Silla added!');
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
        $silla = Silla::findOrFail($id);

        return view('sillas.show', compact('silla'));
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
        $silla = Silla::findOrFail($id);

        return view('sillas.edit', compact('silla'));
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
        
        $silla = Silla::findOrFail($id);
        $silla->update($requestData);

        return redirect('sillas')->with('flash_message', 'Silla updated!');
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
        Silla::destroy($id);

        return redirect('sillas')->with('flash_message', 'Silla deleted!');
    }
}
