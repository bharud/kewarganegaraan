<?php 
error_reporting(0);
session_start();
include "db.php"; // ini adalah koneksi ke database
date_default_timezone_set("Asia/Jakarta");

if(isset($_SESSION[userkep])){
	include 'atas.php';
	include 'menu.php';
 	include 'content.php';
 	include 'bawah.php'; 
}else{
	include 'login.php';
}

//logout
if($_GET[page]=='logout'){ include 'login.php';}
