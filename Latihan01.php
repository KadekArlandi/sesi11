<?php
$dta[0]["nama"] = "Komang Adi";
$dta[0]["alamat"] = "Jl. utama 5 blok A17";
$dta[0]["tgl_lahir"] = "2011-11-28";
$dta[0]["prodi"] = "Teknik Informatika";
$dta[0]["jurusan"] = "MDI";

$dta[1]["nama"] = "Made Putra";
$dta[1]["alamat"] = "Gianyar";
$dta[1]["tgl_lahir"] = "2004-01-21";
$dta[1]["prodi"] = "Teknik Informatika";
$dta[1]["jurusan"] = "KAB";

$dta[2]["nama"] = "Riyan";
$dta[2]["alamat"] = "Panjer";
$dta[2]["tgl_lahir"] = "2004-05-10";
$dta[2]["prodi"] = "Teknik Informatika";
$dta[2]["jurusan"] = "MDI";



header("content_type: application/json, charset=utf-8 ");
echo json_encode($dta);