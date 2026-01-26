@extends('layouts.admin')

@section('title', 'Demandes de Projet - Admin Dashboard')

@section('content')

<div class="admin_dashboard">
  
  <!-- Header Section -->
  <div class="dashboard_header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="dashboard_title">
            <i class="fa-solid fa-folder-open"></i> Demandes de Projet
          </h1>
          <p class="dashboard_subtitle">Gérez et suivez toutes les demandes clients</p>
        </div>
        <div class="col-md-6 text-end">
          <button class="btn btn-primary" onclick="exportData()">
            <i class="fa-solid fa-download"></i> Exporter CSV
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Stats Cards Section -->
  <div class="stats_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat_card stat_card_primary">
            <div class="stat_icon">
              <i class="fa-solid fa-inbox"></i>
            </div>
            <div class="stat_content">
              <h3 class="stat_number">{{ $stats['nouveau'] ?? 0 }}</h3>
              <p class="stat_label">Nouvelles demandes</p>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat_card stat_card_warning">
            <div class="stat_icon">
              <i class="fa-solid fa-clock"></i>
            </div>
            <div class="stat_content">
              <h3 class="stat_number">{{ $stats['en_cours'] ?? 0 }}</h3>
              <p class="stat_label">En cours</p>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat_card stat_card_success">
            <div class="stat_icon">
              <i class="fa-solid fa-check-circle"></i>
            </div>
            <div class="stat_content">
              <h3 class="stat_number">{{ $stats['traite'] ?? 0 }}</h3>
              <p class="stat_label">Traitées</p>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat_card stat_card_info">
            <div class="stat_icon">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <div class="stat_content">
              <h3 class="stat_number">{{ $stats['total_mois'] ?? 0 }}</h3>
              <p class="stat_label">Total ce mois</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Filters Section -->
  <div class="filters_section">
    <div class="container-fluid">
      <div class="filters_card">
        <div class="row align-items-center">
          <div class="col-md-3 mb-3 mb-md-0">
            <div class="filter_group">
              <label><i class="fa-solid fa-filter"></i> Statut</label>
              <select class="form-control" id="filter_status" onchange="applyFilters()">
                <option value="">Tous les statuts</option>
                <option value="nouveau" {{ request('status') == 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                <option value="en_cours" {{ request('status') == 'en_cours' ? 'selected' : '' }}>En cours</option>
                <option value="analyse" {{ request('status') == 'analyse' ? 'selected' : '' }}>En analyse</option>
                <option value="accepte" {{ request('status') == 'accepte' ? 'selected' : '' }}>Accepté</option>
                <option value="refuse" {{ request('status') == 'refuse' ? 'selected' : '' }}>Refusé</option>
                <option value="termine" {{ request('status') == 'termine' ? 'selected' : '' }}>Terminé</option>
                <option value="archive" {{ request('status') == 'archive' ? 'selected' : '' }}>Archivé</option>
              </select>
            </div>
          </div>
          
          <div class="col-md-3 mb-3 mb-md-0">
            <div class="filter_group">
              <label><i class="fa-solid fa-calendar"></i> Période</label>
              <select class="form-control" id="filter_period" onchange="applyFilters()">
                <option value="">Toutes les périodes</option>
                <option value="today" {{ request('period') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                <option value="week" {{ request('period') == 'week' ? 'selected' : '' }}>Cette semaine</option>
                <option value="month" {{ request('period') == 'month' ? 'selected' : '' }}>Ce mois</option>
              </select>
            </div>
          </div>
          
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="filter_group">
              <label><i class="fa-solid fa-search"></i> Recherche</label>
              <div class="input-group">
                <input type="text" class="form-control" id="filter_search" 
                       placeholder="Nom, email, organisation..." 
                       value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="button" onclick="applyFilters()">
                  <i class="fa-solid fa-search"></i>
                </button>
              </div>
            </div>
          </div>
          
          <div class="col-md-2 text-end">
            <label class="d-block opacity-0">Action</label>
            <button class="btn btn-outline-secondary w-100" onclick="resetFilters()">
              <i class="fa-solid fa-rotate-left"></i> Réinitialiser
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Requests Table Section -->
  <div class="table_section">
    <div class="container-fluid">
      <div class="table_card">
        <div class="table-responsive">
          <table class="requests_table">
            <thead>
              <tr>
                <th width="5%">
                  <input type="checkbox" id="select_all">
                </th>
                <th width="10%">ID</th>
                <th width="15%">Client</th>
                <th width="15%">Organisation</th>
                <th width="15%">Type de projet</th>
                <th width="10%">Date</th>
                <th width="10%">Urgence</th>
                <th width="10%">Statut</th>
                <th width="10%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($requests as $request)
              <tr class="request_row" onclick="showRequestDetails({{ $request->id }})">
                <td onclick="event.stopPropagation()">
                  <input type="checkbox" class="request_checkbox">
                </td>
                <td><strong>#PR-{{ str_pad($request->id, 5, '0', STR_PAD_LEFT) }}</strong></td>
                <td>
                  <div class="client_info">
                    <div class="client_avatar">
                      {{ substr($request->prenom, 0, 1) }}{{ substr($request->nom, 0, 1) }}
                    </div>
                    <div>
                      <div class="client_name">{{ $request->prenom }} {{ $request->nom }}</div>
                      <div class="client_email">{{ $request->email }}</div>
                    </div>
                  </div>
                </td>
                <td>{{ $request->organisation }}</td>
                <td>
                  @php
                    $typeLabels = [];
                    foreach($request->types as $type) {
                        $typeLabels[] = $type->pivot->custom_value ?? $type->label;
                    }
                    $badgeClasses = [
                        'Application web' => 'badge_web',
                        'Application mobile' => 'badge_mobile',
                        'Plateforme métier' => 'badge_plateforme',
                        'E-commerce' => 'badge_site',
                        'Site web' => 'badge_site',
                        'Web' => 'badge_web',
                        'Mobile' => 'badge_mobile',
                    ];
                  @endphp
                  @foreach(array_slice($typeLabels, 0, 2) as $typeLabel)
                    <span class="badge badge_type {{ $badgeClasses[$typeLabel] ?? 'badge_web' }}">{{ $typeLabel }}</span>
                  @endforeach
                  @if(count($typeLabels) > 2)
                    <span class="badge badge_type badge_more">+{{ count($typeLabels) - 2 }}</span>
                  @endif
                </td>
                <td>{{ $request->created_at->format('d M Y') }}</td>
                <td>
                  @php
                    $urgenceClass = [
                        'critique' => 'urgence_critique',
                        'eleve' => 'urgence_eleve',
                        'moyen' => 'urgence_moyen',
                        'faible' => 'urgence_faible',
                    ][$request->urgence] ?? 'urgence_faible';
                    
                    $urgenceText = [
                        'critique' => 'Critique',
                        'eleve' => 'Élevé',
                        'moyen' => 'Moyen',
                        'faible' => 'Faible',
                    ][$request->urgence] ?? 'Non précisé';
                  @endphp
                  <span class="urgence_badge {{ $urgenceClass }}">{{ $urgenceText }}</span>
                </td>
                <td>
                  @php
                    $statusClass = [
                        'nouveau' => 'status_nouveau',
                        'en_cours' => 'status_en_cours',
                        'analyse' => 'status_en_cours',
                        'accepte' => 'status_traite',
                        'refuse' => 'status_traite',
                        'termine' => 'status_traite',
                        'archive' => 'status_archive',
                    ][$request->statut] ?? 'status_nouveau';
                    
                    $statusText = [
                        'nouveau' => 'Nouveau',
                        'en_cours' => 'En cours',
                        'analyse' => 'En analyse',
                        'accepte' => 'Accepté',
                        'refuse' => 'Refusé',
                        'termine' => 'Terminé',
                        'archive' => 'Archivé',
                    ][$request->statut] ?? 'Nouveau';
                  @endphp
                  <span class="status_badge {{ $statusClass }}">{{ $statusText }}</span>
                </td>
                <td onclick="event.stopPropagation()">
                  <div class="action_buttons">
                    <a href="{{ route('admin.project-requests.show', $request->id) }}" 
                           class="btn btn-outline-primary" title="Voir">
                            <i class="fas fa-eye"></i>
                        </a>
                    
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="pagination_section">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p class="pagination_info">
                Affichage de <strong>{{ $requests->firstItem() ?? 0 }}-{{ $requests->lastItem() ?? 0 }}</strong> 
                sur <strong>{{ $requests->total() }}</strong> demandes
              </p>
            </div>
            <div class="col-md-6">
              <nav>
                <ul class="pagination justify-content-end">
                  @if($requests->onFirstPage())
                  <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $requests->previousPageUrl() }}&status={{ request('status') }}&period={{ request('period') }}&search={{ request('search') }}">
                      <i class="fa-solid fa-chevron-left"></i>
                    </a>
                  </li>
                  @endif

                  @php
                    $current = $requests->currentPage();
                    $total = $requests->lastPage();
                    $start = max($current - 2, 1);
                    $end = min($current + 2, $total);
                  @endphp
                  
                  @if($start > 1)
                    <li class="page-item"><a class="page-link" href="?page=1&status={{ request('status') }}&period={{ request('period') }}&search={{ request('search') }}">1</a></li>
                    @if($start > 2)
                      <li class="page-item"><a class="page-link" href="#">...</a></li>
                    @endif
                  @endif
                  
                  @for($page = $start; $page <= $end; $page++)
                    @if($page == $current)
                    <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                    <li class="page-item"><a class="page-link" href="?page={{ $page }}&status={{ request('status') }}&period={{ request('period') }}&search={{ request('search') }}">{{ $page }}</a></li>
                    @endif
                  @endfor
                  
                  @if($end < $total)
                    @if($end < $total - 1)
                      <li class="page-item"><a class="page-link" href="#">...</a></li>
                    @endif
                    <li class="page-item"><a class="page-link" href="?page={{ $total }}&status={{ request('status') }}&period={{ request('period') }}&search={{ request('search') }}">{{ $total }}</a></li>
                  @endif
                  
                  @if($requests->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $requests->nextPageUrl() }}&status={{ request('status') }}&period={{ request('period') }}&search={{ request('search') }}">
                      <i class="fa-solid fa-chevron-right"></i>
                    </a>
                  </li>
                  @else
                  <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                  </li>
                  @endif
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal de détails -->
<div class="modal fade" id="requestDetailsModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fa-solid fa-file-lines"></i> Détails de la demande
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="modalBody">
        <!-- Contenu chargé dynamiquement via JS -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('styles')
<style>
/* Votre CSS exact tel que fourni */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  background: #f5f7fa;
  color: #2c3e50;
}

.admin_dashboard {
  padding: 0;
}

/* Dashboard Header */
.dashboard_header {
  background: linear-gradient(135deg, #0066cc 0%, #004999 100%);
  color: white;
  padding: 2rem 0;
  margin-bottom: 2rem;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.dashboard_title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

.dashboard_subtitle {
  font-size: 1.1rem;
  opacity: 0.9;
  margin: 0;
}

/* Stats Section */
.stats_section {
  margin-bottom: 2rem;
}

.stat_card {
  background: white;
  border-radius: 12px;
  padding: 1.5rem;
  display: flex;
  align-items: center;
  gap: 1.5rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  transition: transform 0.3s, box-shadow 0.3s;
  height: 100%;
}

.stat_card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.stat_icon {
  width: 70px;
  height: 70px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  flex-shrink: 0;
}

.stat_card_primary .stat_icon {
  background: rgba(0, 102, 204, 0.1);
  color: #0066cc;
}

.stat_card_warning .stat_icon {
  background: rgba(255, 193, 7, 0.1);
  color: #ffc107;
}

.stat_card_success .stat_icon {
  background: rgba(40, 167, 69, 0.1);
  color: #28a745;
}

.stat_card_info .stat_icon {
  background: rgba(23, 162, 184, 0.1);
  color: #17a2b8;
}

.stat_content {
  flex: 1;
}

.stat_number {
  font-size: 2rem;
  font-weight: 700;
  margin: 0;
  color: #2c3e50;
}

.stat_label {
  font-size: 0.95rem;
  color: #6c757d;
  margin: 0;
}

/* Filters Section */
.filters_section {
  margin-bottom: 2rem;
}

.filters_card {
  background: white;
  padding: 1.5rem;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.filter_group label {
  font-size: 0.875rem;
  font-weight: 600;
  color: #495057;
  margin-bottom: 0.5rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.filter_group .form-control {
  border: 1px solid #dee2e6;
  border-radius: 8px;
  padding: 0.6rem 1rem;
  font-size: 0.95rem;
}

.filter_group .form-control:focus {
  border-color: #0066cc;
  box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.15);
}

/* Table Section */
.table_section {
  margin-bottom: 2rem;
}

.table_card {
  background: white;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  overflow: hidden;
}

.requests_table {
  width: 100%;
  border-collapse: collapse;
}

.requests_table thead {
  background: #f8f9fa;
}

.requests_table th {
  padding: 1rem;
  text-align: left;
  font-weight: 600;
  font-size: 0.875rem;
  color: #495057;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  border-bottom: 2px solid #dee2e6;
}

.requests_table tbody tr {
  border-bottom: 1px solid #f0f0f0;
  transition: background 0.2s;
}

.requests_table tbody tr:hover {
  background: #f8f9fa;
  cursor: pointer;
}

.requests_table td {
  padding: 1rem;
  font-size: 0.95rem;
  vertical-align: middle;
}

/* Client Info */
.client_info {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.client_avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, #0066cc, #004999);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 0.875rem;
  flex-shrink: 0;
}

.client_name {
  font-weight: 600;
  color: #2c3e50;
}

.client_email {
  font-size: 0.85rem;
  color: #6c757d;
}

/* Badges */
.badge {
  display: inline-block;
  padding: 0.35rem 0.75rem;
  border-radius: 6px;
  font-size: 0.8rem;
  font-weight: 600;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.badge_type {
  border: 1px solid;
}

.badge_web {
  background: rgba(0, 102, 204, 0.1);
  color: #0066cc;
  border-color: #0066cc;
}

.badge_mobile {
  background: rgba(111, 66, 193, 0.1);
  color: #6f42c1;
  border-color: #6f42c1;
}

.badge_plateforme {
  background: rgba(255, 193, 7, 0.1);
  color: #e0a800;
  border-color: #ffc107;
}

.badge_site {
  background: rgba(40, 167, 69, 0.1);
  color: #28a745;
  border-color: #28a745;
}

/* Urgence Badges */
.urgence_badge {
  display: inline-block;
  padding: 0.4rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 600;
}

.urgence_critique {
  background: #dc3545;
  color: white;
}

.urgence_eleve {
  background: #fd7e14;
  color: white;
}

.urgence_moyen {
  background: #ffc107;
  color: #000;
}

.urgence_faible {
  background: #28a745;
  color: white;
}

/* Status Badges */
.status_badge {
  display: inline-block;
  padding: 0.4rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 600;
}

.status_nouveau {
  background: rgba(0, 102, 204, 0.15);
  color: #0066cc;
}

.status_en_cours {
  background: rgba(255, 193, 7, 0.15);
  color: #e0a800;
}

.status_traite {
  background: rgba(40, 167, 69, 0.15);
  color: #28a745;
}

.status_archive {
  background: rgba(108, 117, 125, 0.15);
  color: #6c757d;
}

/* Action Buttons */
.action_buttons {
  display: flex;
  gap: 0.5rem;
}

.btn_action {
  width: 32px;
  height: 32px;
  border: none;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s;
  font-size: 0.9rem;
}

.btn_view {
  background: rgba(23, 162, 184, 0.1);
  color: #17a2b8;
}

.btn_view:hover {
  background: #17a2b8;
  color: white;
}

.btn_edit {
  background: rgba(255, 193, 7, 0.1);
  color: #ffc107;
}

.btn_edit:hover {
  background: #ffc107;
  color: #000;
}

.btn_delete {
  background: rgba(220, 53, 69, 0.1);
  color: #dc3545;
}

.btn_delete:hover {
  background: #dc3545;
  color: white;
}

/* Pagination */
.pagination_section {
  padding: 1.5rem;
  border-top: 1px solid #f0f0f0;
}

.pagination_info {
  margin: 0;
  color: #6c757d;
}

.pagination {
  margin: 0;
}

.page-link {
  color: #0066cc;
  border: 1px solid #dee2e6;
  padding: 0.5rem 0.75rem;
  margin: 0 0.25rem;
  border-radius: 6px;
}

.page-link:hover {
  background: #0066cc;
  color: white;
  border-color: #0066cc;
}

.page-item.active .page-link {
  background: #0066cc;
  border-color: #0066cc;
}

/* Modal Styles */
.modal-content {
  border: none;
  border-radius: 12px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

.modal-header {
  background: linear-gradient(135deg, #0066cc 0%, #004999 100%);
  color: white;
  border-radius: 12px 12px 0 0;
  padding: 1.5rem;
}

.modal-title {
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.modal-body {
  padding: 2rem;
}

.detail_section {
  margin-bottom: 2rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #e9ecef;
}

.detail_section:last-child {
  border-bottom: none;
}

.detail_section_title {
  font-size: 1.2rem;
  font-weight: 600;
  color: #0066cc;
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.detail_item {
  margin-bottom: 1rem;
}

.detail_item label {
  font-weight: 600;
  color: #495057;
  display: block;
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
}

.detail_item p {
  color: #6c757d;
  margin: 0;
  line-height: 1.6;
}

.detail_item a {
  color: #0066cc;
  text-decoration: none;
}

.detail_item a:hover {
  text-decoration: underline;
}

.project_types_display,
.features_display {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.feature_badge {
  background: #f8f9fa;
  border: 1px solid #dee2e6;
  padding: 0.5rem 1rem;
  border-radius: 8px;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9rem;
}

.feature_badge i {
  color: #28a745;
}

.documents_list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.document_item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  background: #f8f9fa;
  border-radius: 8px;
  border: 1px solid #dee2e6;
}

.document_item i {
  font-size: 1.5rem;
  color: #dc3545;
}

.document_item span {
  flex: 1;
  font-weight: 500;
}

/* Responsive */
@media (max-width: 768px) {
  .dashboard_header {
    text-align: center;
  }
  
  .dashboard_title {
    font-size: 1.5rem;
  }
  
  .stat_card {
    margin-bottom: 1rem;
  }
  
  .filters_card .row > div {
    margin-bottom: 1rem;
  }
  
  .table-responsive {
    overflow-x: auto;
  }
  
  .action_buttons {
    flex-direction: column;
  }
}

/* Classe supplémentaire pour les badges "plus" */
.badge_more {
  background: rgba(108, 117, 125, 0.1);
  color: #6c757d;
  border-color: #6c757d;
}
</style>
@endpush

@push('scripts')
<script>
// Fonction pour afficher les détails d'une demande
function showRequestDetails(id) {
  // Charger les détails via AJAX
  fetch(`/admin/project-requests/${id}/details`)
    .then(response => response.text())
    .then(html => {
      document.getElementById('modalBody').innerHTML = html;
      document.querySelector('.modal-title').innerHTML = 
        `<i class="fa-solid fa-file-lines"></i> Détails de la demande #PR-${id.toString().padStart(5, '0')}`;
      const modal = new bootstrap.Modal(document.getElementById('requestDetailsModal'));
      modal.show();
    })
    .catch(error => {
      console.error('Erreur:', error);
      alert('Erreur lors du chargement des détails');
    });
}

// Fonction pour voir une demande
function viewRequest(id) {
  showRequestDetails(id);
}

// Fonction pour éditer le statut
function editStatus(id) {
  alert('Édition du statut pour la demande #' + id);
}

// Fonction pour supprimer une demande
function deleteRequest(id) {
  if (confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')) {
    fetch(`/admin/project-requests/${id}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      if (response.ok) {
        location.reload();
      } else {
        alert('Erreur lors de la suppression');
      }
    });
  }
}

// Fonction pour exporter les données
function exportData() {
  const params = new URLSearchParams({
    status: document.getElementById('filter_status').value,
    period: document.getElementById('filter_period').value,
    search: document.getElementById('filter_search').value
  });
  
  window.location.href = `/admin/project-requests/export?${params.toString()}`;
}

// Fonction pour appliquer les filtres
function applyFilters() {
  const params = new URLSearchParams({
    status: document.getElementById('filter_status').value,
    period: document.getElementById('filter_period').value,
    search: document.getElementById('filter_search').value
  });
  
  window.location.href = `${window.location.pathname}?${params.toString()}`;
}

// Fonction pour réinitialiser les filtres
function resetFilters() {
  window.location.href = window.location.pathname;
}

// Gestion de la sélection multiple
document.getElementById('select_all')?.addEventListener('change', function() {
  const checkboxes = document.querySelectorAll('.request_checkbox');
  checkboxes.forEach(cb => cb.checked = this.checked);
});

// Empêcher la propagation du clic sur les checkboxes
document.querySelectorAll('.request_checkbox').forEach(cb => {
  cb.addEventListener('click', function(e) {
    e.stopPropagation();
  });
});
</script>
@endpush