@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  {{-- <img class="img-fluid mb-4 img-circle pull-right " height="90" width="80" src="/img/digirest.png"  alt="Desarrollo web"> --}}
  {{-- <img class="img-fluid mb-4 " src="/img/rest.svg" width="400" height="400" alt="Desarrollo web"> --}}


 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">DigiRest</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


 <!-- Main content -->
 <section class="content">
  <div class="container-fluid " >
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div style="background-color:#007bff;" class="small-box bg-info">
          <div class="inner">
            <h3>147</h3>

            <p>Ordenes</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        <a href="{{url('ordenes')}}" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div style="background-color:#28a745;" class="small-box bg-success">
          <div  class="inner ">
            <h3>$289.000<sup style="font-size: 20px"></sup></h3>

            <p>Ganancias</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div style="background-color:#ffc107;" class="small-box bg-warning">
          <div  class="inner">
            <h3>44</h3>

            <p>Clientes Registrados</p>
          </div>
          <div  class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ url('/clientes')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div style="background-color:#dc3545" class="small-box bg-danger">
        <div class="inner">
            <h3>65</h3>

            <p>Entradas</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    {{-- <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Sales
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header --> --}}
          {{-- <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart"
                   style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
               </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
              </div>  
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card --> --}}

  <!-- TO DO List -->
  <div class="card pull right" >
    <div class="card-header">
      <h3 class="card-title">
        <i class="ion ion-clipboard mr-1"></i>
        Lista de que haceres
      </h3>

      <div class="card-tools">
        <ul class="pagination pagination-sm">
          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ul class="todo-list" data-widget="todo-list">
        <li>
          <!-- drag handle -->
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <!-- checkbox -->
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo1" id="todoCheck1">
            <label for="todoCheck1"></label>
          </div>
          <!-- todo text -->
          <span class="text">Llenar bodega</span>
          <!-- Emphasis label -->
          <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
          <!-- General tools such as edit or delete-->
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
            <label for="todoCheck2"></label>
          </div>
          <span class="text">Cambiar Horarios</span>
          <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo3" id="todoCheck3">
            <label for="todoCheck3"></label>
          </div>
          <span class="text">Subir sueldo</span>
          <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
       
          
        
        
	
@endsection