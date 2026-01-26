@extends('adminlte::page')

@section('title', 'Dashboard - Luz del Saber')

@section('content_header')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">
                <i class="fas fa-tachometer-alt text-primary"></i> 
                Bienvenido, {{ Auth::user()->name }}
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    {{-- Tarjetas de Estadísticas --}}
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>{{ $totalLibrosComprados ?? 5 }}</h3>
                    <p>Libros en Mi Biblioteca</p>
                </div>
                <div class="icon">
                    <i class="fas fa-books"></i>
                </div>
                <a href="{{ url('my-library') }}" class="small-box-footer">
                    Ver biblioteca <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $librosPorLeer ?? 3 }}</h3>
                    <p>Libros por Leer</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book-reader"></i>
                </div>
                <a href="{{ url('my-library?status=unread') }}" class="small-box-footer">
                    Comenzar a leer <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>{{ $itemsEnCarrito ?? 3 }}</h3>
                    <p>Items en Carrito</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="{{ url('cart') }}" class="small-box-footer">
                    Ver carrito <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-danger">
                <div class="inner">
                    <h3>{{ $listaDeseosCount ?? 8 }}</h3>
                    <p>Lista de Deseos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-heart"></i>
                </div>
                <a href="{{ url('wishlist') }}" class="small-box-footer">
                    Ver lista <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Últimas Lecturas y Recomendaciones --}}
    <div class="row">
        {{-- Continuar Leyendo --}}
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-book-open"></i> Continuar Leyendo
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/1e3a8a/ffffff?text=Libro+1" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/1') }}" class="product-title">
                                    El Poder de la Oración
                                    <span class="badge badge-info float-right">65% leído</span>
                                </a>
                                <span class="product-description">
                                    Pastor Juan Martínez
                                </span>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-info" style="width: 65%"></div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/d97706/ffffff?text=Libro+2" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/2') }}" class="product-title">
                                    Renueva Tu Mente
                                    <span class="badge badge-warning float-right">30% leído</span>
                                </a>
                                <span class="product-description">
                                    Dra. María González
                                </span>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/10b981/ffffff?text=Libro+3" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/3') }}" class="product-title">
                                    Construyendo un Hogar Sólido
                                    <span class="badge badge-success float-right">90% leído</span>
                                </a>
                                <span class="product-description">
                                    Rev. Carlos Mendoza
                                </span>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('my-library') }}" class="uppercase">Ver Toda Mi Biblioteca</a>
                </div>
            </div>
        </div>

        {{-- Recomendados para Ti --}}
        <div class="col-md-6">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-sparkles"></i> Recomendados para Ti
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/8b5cf6/ffffff?text=Nuevo" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/4') }}" class="product-title">
                                    Líderes con Propósito
                                    <span class="badge badge-primary float-right">NUEVO</span>
                                </a>
                                <span class="product-description">
                                    Pastor Roberto Silva
                                </span>
                                <div class="mt-2">
                                    <span class="text-success font-weight-bold">$11.99</span>
                                    <button class="btn btn-sm btn-success float-right">
                                        <i class="fas fa-cart-plus"></i> Agregar
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/ef4444/ffffff?text=Popular" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/5') }}" class="product-title">
                                    Fe Inquebrantable
                                    <span class="badge badge-danger float-right">HOT</span>
                                </a>
                                <span class="product-description">
                                    Dra. Ana Torres
                                </span>
                                <div class="mt-2">
                                    <span class="text-success font-weight-bold">$9.99</span>
                                    <button class="btn btn-sm btn-success float-right">
                                        <i class="fas fa-cart-plus"></i> Agregar
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="https://via.placeholder.com/150x200/f59e0b/ffffff?text=Oferta" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="{{ url('book/6') }}" class="product-title">
                                    Sanidad Emocional
                                    <span class="badge badge-warning float-right">-20%</span>
                                </a>
                                <span class="product-description">
                                    Psic. Laura Ramírez
                                </span>
                                <div class="mt-2">
                                    <span class="text-muted"><del>$12.99</del></span>
                                    <span class="text-success font-weight-bold">$10.39</span>
                                    <button class="btn btn-sm btn-success float-right">
                                        <i class="fas fa-cart-plus"></i> Agregar
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('catalog') }}" class="uppercase">Explorar Más Libros</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Actividad Reciente y Accesos Rápidos --}}
    <div class="row">
        {{-- Actividad Reciente --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">
                        <i class="fas fa-history"></i> Actividad Reciente
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Pedido ID</th>
                                    <th>Libro</th>
                                    <th>Estado</th>
                                    <th>Total</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{ url('order/ORD-001') }}">#ORD-001</a></td>
                                    <td>El Poder de la Oración (Digital)</td>
                                    <td><span class="badge badge-success">Completado</span></td>
                                    <td>$9.99</td>
                                    <td>
                                        <a href="{{ url('book/1/read') }}" class="btn btn-xs btn-primary">
                                            <i class="fas fa-book-open"></i> Leer
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('order/ORD-002') }}">#ORD-002</a></td>
                                    <td>Renueva Tu Mente (Físico)</td>
                                    <td><span class="badge badge-warning">En tránsito</span></td>
                                    <td>$17.99</td>
                                    <td>
                                        <a href="{{ url('order/ORD-002/track') }}" class="btn btn-xs btn-info">
                                            <i class="fas fa-truck"></i> Rastrear
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('order/ORD-003') }}">#ORD-003</a></td>
                                    <td>Construyendo un Hogar Sólido</td>
                                    <td><span class="badge badge-info">Procesando</span></td>
                                    <td>$21.99</td>
                                    <td>
                                        <a href="{{ url('order/ORD-003') }}" class="btn btn-xs btn-secondary">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="{{ url('orders') }}" class="btn btn-sm btn-primary float-left">Ver Todos los Pedidos</a>
                    <a href="{{ url('catalog') }}" class="btn btn-sm btn-success float-right">Comprar Más Libros</a>
                </div>
            </div>
        </div>

        {{-- Accesos Rápidos --}}
        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-rocket"></i> Accesos Rápidos
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ url('catalog') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-search text-primary"></i> Explorar Catálogo
                        </a>
                        <a href="{{ url('cart') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-shopping-cart text-warning"></i> Ver Carrito (3 items)
                        </a>
                        <a href="{{ url('my-library') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-books text-info"></i> Mi Biblioteca
                        </a>
                        <a href="{{ url('wishlist') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-heart text-danger"></i> Lista de Deseos
                        </a>
                        <a href="{{ url('profile') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-circle text-secondary"></i> Editar Perfil
                        </a>
                        <a href="{{ url('support') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-headset text-success"></i> Soporte
                        </a>
                    </div>
                </div>
            </div>

            {{-- Notificaciones --}}
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bell"></i> Notificaciones
                    </h3>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <small class="text-info"><i class="fas fa-gift"></i> Oferta Especial</small>
                                <small class="text-muted">Hace 2h</small>
                            </div>
                            <p class="mb-1 small">¡20% OFF en libros de liderazgo!</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <small class="text-success"><i class="fas fa-check-circle"></i> Pedido</small>
                                <small class="text-muted">Ayer</small>
                            </div>
                            <p class="mb-1 small">Tu pedido #ORD-002 está en camino</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <small class="text-primary"><i class="fas fa-book"></i> Nuevo</small>
                                <small class="text-muted">2 días</small>
                            </div>
                            <p class="mb-1 small">3 libros nuevos en tu categoría favorita</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .products-list .product-img {
            float: left;
            width: 60px;
        }
        
        .products-list .product-img img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .products-list .product-info {
            margin-left: 70px;
        }
        
        .small-box {
            border-radius: 8px;
        }
        
        .small-box .icon {
            font-size: 70px;
        }
        
        .card {
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        }
        
        .card-header {
            border-bottom: 2px solid rgba(0,0,0,0.05);
        }
        
        .list-group-item {
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .list-group-item:hover {
            border-left-color: #007bff;
            background-color: #f8f9fa;
        }
        
        .progress-xs {
            height: 5px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Dashboard cargado exitosamente! 🚀');
        
        // Mensaje de bienvenida
        $(document).ready(function() {
            toastr.success('¡Bienvenido de nuevo, {{ Auth::user()->name }}! 📚', 'Dashboard', {
                timeOut: 3000,
                progressBar: true,
                positionClass: 'toast-top-right'
            });
        });
    </script>
@stop