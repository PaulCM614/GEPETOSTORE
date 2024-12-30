<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" style="width: 200px; height: auto;">
                    </a>
                    
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu - Opciones</li>

                <li class="sidebar-item active ">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a href="{{ route('byke.index') }}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Bicicletas</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Proveedores</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('supplier.create') }}">Agregar Proveedor</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('supplier.index') }}">Lista de Proveedores</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Categorias</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('category.create') }}">Agregar Categoria</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('category.index') }}">Lista de Categoria</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Ventas</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('sale.create') }}">Agregar Venta</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('sale.index') }}">Lista de Venta</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Compras</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('purchase.create') }}">Agregar Compra</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('purchase.index') }}">Lista de Compras</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Usuarios</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('users.create') }}">Agregar Usuario</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('users.index') }}">Lista de Usuarios</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Clientes</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{ route('customer.create') }}">Agregar Cliente</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="{{ route('customer.index') }}">Lista de Clientes</a>
                        </li>
                    </ul>
                </li>
            <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-search"></i>
                    <span>Consultas</span>
                </a>
                <ul class="submenu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consultas.cliente') }}">Por Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consultas.bicicleta') }}">Por Bicicleta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consultas.fecha') }}">Por Fecha</a>
                    </li>
                </ul>
            </li>


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>