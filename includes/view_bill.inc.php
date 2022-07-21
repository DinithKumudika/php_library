<?php
     // reference the Dompdf namespace
     use Dompdf\Dompdf;

     //Load Composer's autoloader
     require '../vendor/autoload.php';
     require '../classes/Bill.class.php';

     // instantiate and use the dompdf class
     $dompdf = new Dompdf(array('enable_remote' => true));
     $bill = new Bill($dompdf);
     $bill->viewPdf();

     // // instantiate and use the dompdf class
     // $dompdf = new Dompdf(array('enable_remote' => true));
     // $bill = file_get_contents('http://localhost/myApp/bill.php');
     // $dompdf->loadHtml($bill);

     // // (Optional) Setup the paper size and orientation
     // $dompdf->setPaper('A4', 'portrait');

     // // Render the HTML as PDF
     // $dompdf->render();

     // $file = $dompdf->output();
     // $file_path = '../server/bill.pdf';
     // file_put_contents($file_path, $file);

     // echo '<script>window.location.href = "'.$file_path.'"</script>';