<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function show()
    {
        return view('qrcode');
    }
    
    public function download()
    {
        $qrCode = QrCode::format('svg')
            ->size(500)
            ->errorCorrection('H')
            ->generate('https://adh-statique.onrender.com/index.html');
        
        return response($qrCode)
            ->header('Content-Type', 'image/svg+xml')
            ->header('Content-Disposition', 'attachment; filename="qrcode-adh-group.svg"');
    }
}