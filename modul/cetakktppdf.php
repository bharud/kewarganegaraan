<?php
$no_rm = $_GET[no_rm];
ob_start();
//include(dirname(__FILE__).'skpi.cetak.php');
include "cetakktp.php";
 $filename="report.pdf";
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
