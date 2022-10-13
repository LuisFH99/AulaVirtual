<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class qrController extends Controller{

    public function qr_qenerate(){
       return QrCode::format('png')->size(25)->generate('texto');
       /*generate('https://www.simplesoftware.io/#/docs/simple-qrcode') */
       /*http://127.0.0.1:8000/curso/1 */
    }
    
}
