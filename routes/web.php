<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ProjectRequestController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\Admin\ProjectRequestController as AdminProjectRequestController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\PublicMessageController;

/*
|--------------------------------------------------------------------------
| Routes publiques (CLIENT)
|--------------------------------------------------------------------------
*/

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

Route::post('/project-requests', [ProjectRequestController::class, 'store'])
    ->name('project-requests.store');

Route::get('/domaines/{domain}', [DomainController::class, 'show'])
    ->name('domain.show')
    ->where('domain', 'erp-fintech|ia-data|cybersecurite|cloud-infrastructure|support-infogrance|formation');


/*
|--------------------------------------------------------------------------
| Routes ADMIN (protégées)
|--------------------------------------------------------------------------
| auth AVANT admin = OBLIGATOIRE
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

       

        Route::resource('project-requests', AdminProjectRequestController::class)
            ->except(['create', 'store', 'edit']);

        Route::put(
            '/project-requests/{id}/status',
            [AdminProjectRequestController::class, 'updateStatus']
        )->name('project-requests.update-status');

        Route::get(
            '/project-requests/{request}/download/{document}',
            [AdminProjectRequestController::class, 'downloadDocument']
        )->name('project-requests.download');

        //Messagerie
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::get('/messages/create/{projectRequestId}', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages/{projectRequestId}', [MessageController::class, 'store'])->name('messages.store');
    Route::post('/messages/reply/{conversationId}', [MessageController::class, 'reply'])->name('messages.reply');


    
     
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/export', [\App\Http\Controllers\Admin\DashboardController::class, 'exportCSV'])->name('project-requests.export');
        Route::get('/{id}', [\App\Http\Controllers\Admin\DashboardController::class, 'show'])->name('project-requests.show');
        Route::put('/{id}/status', [\App\Http\Controllers\Admin\DashboardController::class, 'updateStatus'])->name('uproject-requests.pdate-status');
        Route::delete('/{id}', [\App\Http\Controllers\Admin\DashboardController::class, 'destroy'])->name('project-requests.destroy');
 
 

    });



    // Routes publiques pour la messagerie
Route::prefix('conversation')->name('public.messages.')->group(function () {
    Route::get('/{conversationUid}/access', [PublicMessageController::class, 'showAccessForm'])->name('access');
    Route::post('/{conversationUid}/verify', [PublicMessageController::class, 'verifyAccessCode'])->name('verify');
    Route::get('/{conversationUid}', [PublicMessageController::class, 'show'])->name('show');
    Route::post('/{conversationUid}/reply', [PublicMessageController::class, 'reply'])->name('reply');
});

/*
|--------------------------------------------------------------------------
| Auth Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';



 

