<div>
<?php
$f="modul/";
$page=$_GET['page'];
$file = $f."$page.php";
    if (empty($page)){
        include $f.$page.".php";
    }else{
        include $file;
    }
?>
</div>