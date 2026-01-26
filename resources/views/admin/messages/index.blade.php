@extends('layouts.admin')

@section('title', 'Messages')
@section('page-title', 'Messages')
@section('breadcrumb', 'Messages')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Conversations</h5>
    </div>
    <div class="card-body">
        @if($conversations->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Demande</th>
                        <th>Client</th>
                        <th>Email</th>
                        <th>Dernier message</th>
                        <th>Non lus</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conversations as $conversation)
                    <tr>
                        <td>#{{ str_pad($conversation->projectRequest->id, 5, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $conversation->projectRequest->prenom }} {{ $conversation->projectRequest->nom }}</td>
                        <td>{{ $conversation->projectRequest->email }}</td>
                        <td>
                            @if($conversation->latestMessage)
                                {{ Str::limit($conversation->latestMessage->content, 50) }}
                            @else
                                <span class="text-muted">Aucun message</span>
                            @endif
                        </td>
                        <td>
                            @if($conversation->adminUnreadMessagesCount() > 0)
                                <span class="badge bg-danger">{{ $conversation->adminUnreadMessagesCount() }}</span>
                            @else
                                <span class="badge bg-secondary">0</span>
                            @endif
                        </td>
                        <td>
                            @if($conversation->latestMessage)
                                {{ $conversation->latestMessage->created_at->diffForHumans() }}
                            @else
                                {{ $conversation->created_at->diffForHumans() }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.messages.show', $conversation->id) }}" 
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Voir
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $conversations->links() }}
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-comments fa-3x text-muted mb-3"></i>
            <p class="text-muted">Aucune conversation pour le moment.</p>
        </div>
        @endif
    </div>
</div>
@endsection