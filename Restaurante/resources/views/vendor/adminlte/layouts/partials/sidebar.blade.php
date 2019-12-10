<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DigiRest</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('dashboard') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
                    {{-- Meseros --}}
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Meseros</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/meseros/create')}}">Crear Mesero</a></li>
                    <li><a href="{{ url('/meseros')}}">Mostrar Meseros</a></li>
                    <li><a href="/"></a></li>
                    
                </ul>
            </li>
        
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Cajeros</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/cajeros/create')}}">Agregar Cajeros</a></li>
                    <li><a href="{{ url('/cajeros')}}">Mostrar Cajeros</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Asignaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/asignaciones/create')}}">Crear Asignacion</a></li>
                    <li><a href="{{ url('/asignaciones')}}">Mostrar Asignaciones</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/clientes/create')}}">Agregar Cliente</a></li>
                    <li><a href="{{ url('/clientes')}}">Mostrar Clientes</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/usuarios/create')}}">Crear Usuario</a></li>
                    <li><a href="{{ url('/usuarios')}}">Mostrar Usuarios</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/productos/create')}}">Agregar Productos</a></li>
                    <li><a href="{{ url('/productos')}}">Mostrar Productos</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Ordenes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/ordenes/create')}}">Crear Orden</a></li>
                    <li><a href="{{ url('/ordenes')}}">Mostrar Ordenes</a></li>
                    
                </ul>
            </li>
        
        
        

        </ul><!-- /.sidebar-menu -->
       
    </section>
    <!-- /.sidebar -->
</aside>
