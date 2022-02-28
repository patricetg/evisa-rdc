<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    private $htmlPageToPrint = "";
    private $orientation = "portrait";
    private $format = "A4";
    private $outputFileNameWithExt = null;
    private $author = "Max LOGOSU-TEKO";
    private $creator = "";
    private $subject = "Calculs statistiques";


    public function print(string $htmlPageToPrint,?string $outputFileNameWithoutExt = null,?string $orientation = null, ? string $format = null)
    {
        $this->creator = env("APP_NAME");

        $this->htmlPageToPrint = $htmlPageToPrint;

        if(isset($orientation))
        {
            if(!in_array($orientation,["portrait","landscape"]))
                throw new \Exception("Unknow orientation");

            $this->orientation = $orientation;
        }

        if(isset($format))
        {
            if(!in_array($format,["A4","A3"]))
                throw new \Exception("Unknow page format");

            $this->format = $format;
        }


        $_pdf = new Pdf();

//        $_pdf->author = $this->author;
//        $_pdf->creator = $this->creator;
//        $_pdf->subject = $this->subject;

    //    dd($this->htmlPageToPrint);
      //  $_pdf->_setPageSize($this->format,$this->orientation);
        $_pdf->AddPage($this->orientation);
        $_pdf->WriteHTML($this->htmlPageToPrint);


        if(isset($outputFileNameWithoutExt))
            $this->outputFileNameWithExt = "{$outputFileNameWithoutExt}.pdf";

        $_pdf->Output($this->outputFileNameWithExt,"I");

    }
}
