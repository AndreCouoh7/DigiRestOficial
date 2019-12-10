<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DetalleOrden;
use App\Orden;
use App\Producto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
