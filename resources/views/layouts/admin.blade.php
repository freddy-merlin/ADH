<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin ADH Group</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #0066cc 0%, #004d99 100%);
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            padding: 10px 15px;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sidebar a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            text-decoration: none;
        }
        .sidebar a.active {
            color: white;
            background: rgba(255, 255, 255, 0.2);
        }
        .sidebar .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        .sidebar .user-info {
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 20px;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .status-nouveau { background: #007bff; color: white; }
        .status-en_analyse { background: #ffc107; color: #212529; }
        .status-contacte { background: #17a2b8; color: white; }
        .status-devis_envoye { background: #6f42c1; color: white; }
        .status-accepte { background: #28a745; color: white; }
        .status-refuse { background: #dc3545; color: white; }
        .status-termine { background: #6c757d; color: white; }
        
        .request-card {
            transition: transform 0.2s;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .request-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        .dataTables_wrapper {
            margin-top: 20px;
        }
        
        .pagination {
            justify-content: flex-end;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 col-lg-2 d-md-block sidebar collapse">
                <div class="logo">
                    <h4>ADH Group</h4>
                    <small>Espace Admin</small>
                </div>
                
                <nav>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt me-2"></i> Tableau de bord
                    </a>
                    <a href="{{ route('admin.project-requests.index') }}" class="{{ request()->routeIs('admin.project-requests.*') ? 'active' : '' }}">
                        <i class="fas fa-project-diagram me-2"></i> Demandes de projet
                        @if($newRequestsCount = \App\Models\ProjectRequest::where('status', 'nouveau')->count())
                            <span class="badge bg-danger float-end">{{ $newRequestsCount }}</span>
                        @endif
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                        <i class="fas fa-users me-2"></i> Utilisateurs
                    </a>
                    <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <i class="fas fa-cog me-2"></i> Paramètres
                    </a>
                </nav>
                
                <div class="user-info">
                    <small>Connecté en tant que</small>
                    <div>{{ Auth::user()->name }}</div>
                    <small>{{ Auth::user()->email }}</small>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm w-100">
                            <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Main content -->
            <div class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
                    <div class="container-fluid">
                        <button class="btn btn-outline-secondary d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                            <i class="fas fa-bars"></i>
                        </button>
                        
                        <div class="navbar-nav ms-auto">
                            <span class="navbar-text me-3">
                                <i class="fas fa-calendar-alt me-1"></i> {{ now()->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                </nav>
                
                <!-- Main content area -->
                <main class="py-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    @stack('scripts')
</body>
</html>