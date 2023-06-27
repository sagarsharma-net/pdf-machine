<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    public function pdfReport(Request $request, $id)
    {
        

        $response = file_get_contents('https://limsserver.kantipurinfotech.com.np/api/report/final-report-in-nepali/'.$id.'/');

        $data = json_decode($response, true);

        // dd($data);


        $logoImagePath = storage_path('app/public/image/np-min.png');
        $logoImageContents = file_get_contents($logoImagePath);
        $logoImageData = base64_encode($logoImageContents);
        $logoImageMimeType = mime_content_type($logoImagePath);
        $logoImageDataUri = 'data:' . $logoImageMimeType . ';base64,' . $logoImageData;
 
        $html = view('pdf', [
            'data' => $data,
            'logo' => $logoImageDataUri,
        ])->render();
 
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P',
            'autoScriptToLang' => false, 
            'autoLangToFont' => true,
            'default_font' => 'freesans',
            'default_font_size' => 12,
            'showImageErrors' => true,
        ]);
        

        $mpdf->WriteHTML($html);
        return $mpdf->Output();
        $mpdf->Output('Nepali Report.pdf', 'D');
    }
}
