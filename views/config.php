<?php
	require 'vendor/autoload.php';
	//connect to mongodb
	$m = new mongodb\client("mongodb://localhost");
	//echo "Connection to database succesfully";
	//select a database
	$db = $m->kasir-toko;
	$collection = $db->tb_produk;
	$collection = $db->tb_app;
	$collection = $db->tb_detail_transaksi;
	$collection = $db->tb_stock;
	$collection = $db->tb_user;
	$cursor = $collection->find();
?>