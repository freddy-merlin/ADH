<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ProjectRequestController;
use App\Http\Controllers\DomainController;

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/realisations', [PageController::class, 'realisations'])->name('realisations');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact-projet', [PageController::class, 'contactprojet'])->name('contactprojet');


 

Route::get('/qrcode', [QrCodeController::class, 'show'])->name('qrcode.show');
Route::get('/qrcode/download', [QrCodeController::class, 'download'])->name('qrcode.download');
Route::post('/project-requests', [ProjectRequestController::class, 'store'])->name('project-requests.store');



// Route dynamique unique
 Route::get('/domaines/{domain}', [DomainController::class, 'show'])
    ->name('domain.show')
    ->where('domain', 'erp-fintech|ia-data|cybersecurite|cloud-infrastructure|support-infogrance|formation');

  //  /domaines/formation

  
 // Routes admin
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $stats = [
            'total' => \App\Models\ProjectRequest::count(),
            'new' => \App\Models\ProjectRequest::where('status', 'nouveau')->count(),
            'in_progress' => \App\Models\ProjectRequest::whereIn('status', ['en_analyse', 'contacte'])->count(),
            'completed' => \App\Models\ProjectRequest::whereIn('status', ['accepte', 'termine'])->count(),
        ];
        
        $recentRequests = \App\Models\ProjectRequest::with('types')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
            
        return view('admin.dashboard', compact('stats', 'recentRequests'));
    })->name('dashboard');
    
    // Gestion des demandes de projet
    Route::resource('project-requests', \App\Http\Controllers\Admin\ProjectRequestController::class)
        ->except(['create', 'store', 'edit']);
    
    // Routes supplémentaires pour les demandes
    Route::put('/project-requests/{id}/status', 
        [\App\Http\Controllers\Admin\ProjectRequestController::class, 'updateStatus'])
        ->name('project-requests.update-status');
    
    Route::get('/project-requests/{request}/download/{document}', 
        [\App\Http\Controllers\Admin\ProjectRequestController::class, 'downloadDocument'])
        ->name('project-requests.download');
});


// Route temporaire pour créer un admin (à supprimer après usage)
use App\Models\User;

Route::get('/create-admin', function() {
    $admin = User::create([
        'name' => 'Administrateur',
        'email' => 'admin@adhgroup.com',
        'password' => bcrypt('Admin@2024'),
        'role' => 'admin'
    ]);
    
    return 'Admin créé avec succès!<br>
           Email: admin@adhgroup.com<br>
           Password: Admin@2024<br>
           <a href="/login">Se connecter</a>';
});