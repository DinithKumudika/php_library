<?php
     use Dompdf\Dompdf;

     class Bill {
          //Load Composer's autoloader
          public $dompdf;

          function __construct($dompdf)
          {
               $this->dompdf = $dompdf;
          }

          // instantiate and use the dompdf class

          private function createPDF(){
               $this->dompdf = new Dompdf(array('enable_remote' => true));
               $bill = file_get_contents('http://localhost/myApp/bill.php');
               $this->dompdf->loadHtml($bill);

               // (Optional) Setup the paper size and orientation
               $this->dompdf->setPaper('A4', 'portrait');

               // Render the HTML as PDF
               $this->dompdf->render();
          }

          public function viewPdf(){
               $this->createPDF();
               $file = $this->dompdf->output();
               $file_path = '../server/bill.pdf';
               file_put_contents($file_path, $file);
               echo '<script>window.location.href = "'.$file_path.'"</script>';
          }

          public function savePdf(){
               $this->createPDF();
               $this->dompdf->stream('bill.pdf'); 
          }
     }