<?php

namespace Controllers;

use Model\ActiveRecord;
use Mpdf\HTMLParserMode;
use Mpdf\Mpdf;
use MVC\Router;

class ReporteController
{
    public static function pdf(Router $router)
    {
        $mpdf = new Mpdf(
            [
                "default_font_size" => "12",
                "default_font" => "arial",
                "orientation" => "P",
                "margin_top" => "30",
                "format" => "Letter"
            ]
        );
        $ventas = ActiveRecord::fetchArray("SELECT * FROM ventas");
        $html = $router->load('pdf/reporte', [
            'ventas' => $ventas
        ]);
        $mpdf->AliasNbPages('[pagetotal]');
        $css = file_get_contents(_DIR_ . '/../views/pdf/styles.css');
        $header = $router->load('pdf/header');
        $footer = $router->load('pdf/footer');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter($footer);
        $mpdf->WriteHTML($css, HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($html, HTMLParserMode::HTML_BODY);
        $mpdf->AddPage("L");

        
        $publicDir = _DIR_ . '../../public/temp';
        $tempDir = $publicDir . 'temp/';
        $fileName = 'reporte.pdf';
        $filePath = $tempDir . $fileName;


        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        
        $mpdf->Output($filePath, 'F');

        
        if (file_exists($filePath)) {
            echo 'PDF guardado correctamente en ' . $filePath;
        } else {
            echo 'Error al guardar el PDF.';
        }
    }
}