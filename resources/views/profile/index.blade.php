@extends('adminlte::page')

@section('title', 'Mi Perfil - Luz del Saber')

@section('content_header')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">
                <i class="fas fa-user-circle text-primary"></i> Mi Perfil
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Mi Perfil</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    {{-- Alertas --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        {{-- Tarjeta de Información Personal --}}
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <div class="profile-user-img-container mb-3">
                            <div class="profile-user-img-placeholder">
                                <i class="fas fa-user-circle fa-7x text-primary"></i>
                            </div>
                        </div>
                        <h3 class="profile-username text-center">{{ $user->name }}</h3>
                        <p class="text-muted text-center">
                            @if($user->role === 'admin')
                                <span class="badge badge-danger">
                                    <i class="fas fa-crown"></i> Administrador
                                </span>
                            @elseif($user->role === 'pastor')
                                <span class="badge badge-primary">
                                    <i class="fas fa-cross"></i> Pastor
                                </span>
                            @else
                                <span class="badge badge-success">
                                    <i class="fas fa-book-reader"></i> Lector
                                </span>
                            @endif
                        </p>
                    </div>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b><i class="fas fa-envelope text-info"></i> Email</b>
                            <a class="float-right text-muted">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b><i class="fas fa-phone text-success"></i> Teléfono</b>
                            <a class="float-right text-muted">{{ $user->phone ?? 'No especificado' }}</a>
                        </li>
                        <li class="list-group-item">
                            <b><i class="fas fa-map-marker-alt text-danger"></i> Ciudad</b>
                            <a class="float-right text-muted">{{ $user->city ?? 'No especificada' }}</a>
                        </li>
                        <li class="list-group-item">
                            <b><i class="fas fa-calendar-alt text-warning"></i> Miembro desde</b>
                            <a class="float-right text-muted">{{ $user->created_at->format('d/m/Y') }}</a>
                        </li>
                        <li class="list-group-item">
                            <b><i class="fas fa-sign-in-alt text-primary"></i> Último acceso</b>
                            <a class="float-right text-muted">
                                {{ $user->last_login_at ? $user->last_login_at->diffForHumans() : 'Primera vez' }}
                            </a>
                        </li>
                    </ul>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block">
                        <i class="fas fa-edit"></i> Editar Perfil
                    </a>
                </div>
            </div>

            {{-- Estado de la Cuenta --}}
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-shield-check"></i> Estado de la Cuenta
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            <strong>Cuenta Activa</strong>
                        </li>
                        <li class="mb-2">
                            @if($user->email_verified_at)
                                <i class="fas fa-check-circle text-success"></i> 
                                <strong>Email Verificado</strong>
                            @else
                                <i class="fas fa-times-circle text-warning"></i> 
                                <strong>Email Sin Verificar</strong>
                            @endif
                        </li>
                        <li class="mb-2">
                            @if($user->newsletter_subscription)
                                <i class="fas fa-check-circle text-success"></i> 
                                <strong>Suscrito al Newsletter</strong>
                            @else
                                <i class="fas fa-times-circle text-muted"></i> 
                                <strong>No suscrito al Newsletter</strong>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Información Detallada --}}
        <div class="col-md-8">
            {{-- Información Personal --}}
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-id-card"></i> Información Personal
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-user mr-1"></i> Nombre Completo</strong>
                            <p class="text-muted">{{ $user->name }}</p>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fas fa-envelope mr-1"></i> Correo Electrónico</strong>
                            <p class="text-muted">{{ $user->email }}</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-phone mr-1"></i> Teléfono</strong>
                            <p class="text-muted">{{ $user->phone ?? 'No especificado' }}</p>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fas fa-globe mr-1"></i> País</strong>
                            <p class="text-muted">
                                <img src="https://flagcdn.com/16x12/ni.png" alt="Nicaragua"> Nicaragua
                            </p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-city mr-1"></i> Ciudad</strong>
                            <p class="text-muted">{{ $user->city ?? 'No especificada' }}</p>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fas fa-mailbox mr-1"></i> Código Postal</strong>
                            <p class="text-muted">{{ $user->postal_code ?? 'No especificado' }}</p>
                            <hr>
                        </div>
                    </div>

                    <strong><i class="fas fa-map-marked-alt mr-1"></i> Dirección de Envío</strong>
                    <p class="text-muted">
                        {{ $user->address ?? 'No especificada. Agrégala para recibir libros físicos.' }}
                    </p>
                </div>
            </div>

            {{-- Información Ministerial (solo si aplica) --}}
            @if($user->role === 'pastor' || $user->church_name || $user->ministry_role)
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-church"></i> Información Ministerial
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong><i class="fas fa-church mr-1"></i> Iglesia/Ministerio</strong>
                                <p class="text-muted">{{ $user->church_name ?? 'No especificado' }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong><i class="fas fa-user-tie mr-1"></i> Rol en el Ministerio</strong>
                                <p class="text-muted">{{ $user->ministry_role ?? 'No especificado' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Preferencias --}}
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cog"></i> Preferencias
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-language mr-1"></i> Idioma Preferido</strong>
                            <p class="text-muted">{{ $user->preferred_language === 'es' ? 'Español' : 'English' }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fas fa-envelope-open-text mr-1"></i> Newsletter</strong>
                            <p class="text-muted">
                                @if($user->newsletter_subscription)
                                    <span class="badge badge-success">
                                        <i class="fas fa-check"></i> Suscrito
                                    </span>
                                @else
                                    <span class="badge badge-secondary">
                                        <i class="fas fa-times"></i> No suscrito
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Estadísticas del Usuario --}}
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie"></i> Mis Estadísticas
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="description-block">
                                <h5 class="description-header">5</h5>
                                <span class="description-text">Libros Comprados</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="description-block">
                                <h5 class="description-header">3</h5>
                                <span class="description-text">Pedidos Realizados</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="description-block">
                                <h5 class="description-header">8</h5>
                                <span class="description-text">Lista de Deseos</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="description-block">
                                <h5 class="description-header">$127.50</h5>
                                <span class="description-text">Total Gastado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Zona de Peligro --}}
            <div class="card card-danger card-outline collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-exclamation-triangle"></i> Zona de Peligro
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        <strong>Eliminar mi cuenta:</strong> Esta acción es irreversible. 
                        Perderás acceso a todos tus libros comprados, pedidos y datos personales.
                    </p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAccountModal">
                        <i class="fas fa-trash-alt"></i> Eliminar Mi Cuenta
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal de Confirmación de Eliminación --}}
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">
                        <i class="fas fa-exclamation-triangle"></i> Confirmar Eliminación de Cuenta
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('profile.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p><strong>¿Estás seguro de que deseas eliminar tu cuenta?</strong></p>
                        <p class="text-muted">Esta acción no se puede deshacer. Perderás:</p>
                        <ul>
                            <li>Acceso a todos tus libros comprados</li>
                            <li>Historial de pedidos</li>
                            <li>Lista de deseos</li>
                            <li>Datos personales</li>
                        </ul>
                        <div class="form-group mt-3">
                            <label>Confirma tu contraseña:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar Definitivamente
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .profile-user-img-container {
            position: relative;
            display: inline-block;
        }
        
        .profile-user-img-placeholder {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #adb5bd;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            margin: 0 auto;
        }
        
        .description-block {
            margin-bottom: 20px;
        }
        
        .description-header {
            color: #495057;
            font-size: 2rem;
            font-weight: bold;
        }
        
        .description-text {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .list-group-unbordered > .list-group-item {
            border-left: 0;
            border-right: 0;
            border-radius: 0;
            padding-left: 0;
            padding-right: 0;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Perfil de usuario cargado 👤');
    </script>
@stop