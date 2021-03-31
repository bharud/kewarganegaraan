<?php
ob_start();
include "cetaklaporan.php";
 $filename="laporan.pdf";
 $content=ob_get_clean();
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try {

	$html2pdf=new HTML2PDF('P', 'array(8.5in,13in)', 'fr');
	$html2pdf-> setTestTdInOnePage(false);
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	$html2pdf->Output($filename);

} catch (HTML2PDF_exception $e) {
	echo $e;
	exit;
}

?>
