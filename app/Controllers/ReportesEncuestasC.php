<?php

namespace App\Controllers;
use App\Models\Temas;
use App\Models\EncuestasCortas;
use App\Models\Pregunta;
use Dompdf\Dompdf;

class ReportesEncuestasC extends BaseController
{
    public function index()
    {
        $mensaje=session('mensaje');
        $encuestasR = new EncuestasCortas();
        $preguntaR = new Pregunta();
        $encuestas = $encuestasR->obtenerPregunta();
        $preguntas = $preguntaR->obtenerPregunta();
        $votos = $encuestasR->votosTotales();
        $html = view('reportesEncuestasC',['encuestas'=>$encuestas,'preguntas'=>$preguntas, 'mensaje'=>$mensaje, 'votos'=>$votos ]);

        $dompdf = new Dompdf();
        $dompdf->loadHTML($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('Reporte_Encuestas.pdf', ["Attachment"=>1]);
    }

}