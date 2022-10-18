<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class ExportController extends Controller{
    
    
    public function reportCertificado(){

        $certificado=Certificado::find(1);
        $curso=$certificado->matriculas->publicacion->curso->nombre;

        // $qr = QrCode::size(100)->generate("Hola, Soy un certificado del curso {$curso}");

        /*Activar en produccion:
        $qr = QrCode::size(100)->generate("http://fundasam.com/aulavirtual/certificado/detalle/{{$certificado->id}}");*/

        $pdf = PDF::loadView('web.reporte', compact('certificado','curso'))->setPaper('a4', 'landscape');

        // return QrCode::generate('https://www.simplesoftware.io/#/docs/simple-qrcode');

        return $pdf->stream('Certificados.pdf');
    }

    public function downloadCertificado($id){

        $certificado=Certificado::find($id);
        
        $curso=$certificado->matriculas->publicacion->curso->nombre;

        // $qr = QrCode::size(100)->generate("Hola, Soy un certificado del curso {$curso}");

        /*Activar en produccion:
        $qr = QrCode::size(100)->generate("http://fundasam.com/aulavirtual/certificado/detalle/{{$certificado->id}}");*/

        $pdf = PDF::loadView('web.reporte', compact('certificado','curso'))->setPaper('a4', 'landscape');

        // return QrCode::generate('https://www.simplesoftware.io/#/docs/simple-qrcode');

        return $pdf->download("Certificado-Curso-$curso.pdf");
        // -{$certificado}
    }

}
