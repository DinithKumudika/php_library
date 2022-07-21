<?php
     // reference the Dompdf namespace
     use Dompdf\Dompdf;
     
     //Load Composer's autoloader
     require '../vendor/autoload.php';
     require '../classes/Bill.class.php';

     // instantiate and use the dompdf class
     $dompdf = new Dompdf(array('enable_remote' => true));
     $bill = new Bill($dompdf);
     $bill->savePdf();

     // $bill = file_get_contents('http://localhost/myApp/bill.php');
     // $dompdf->loadHtml($bill);

     // // (Optional) Setup the paper size and orientation
     // $dompdf->setPaper('A4', 'portrait');

     // // Render the HTML as PDF
     // $dompdf->render();

     // // Output the generated PDF to Browser
     // $dompdf->stream('bill.pdf');

     // // $file = $dompdf->output();
     // // file_put_contents('bill.pdf',$file);

