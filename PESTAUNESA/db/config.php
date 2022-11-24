<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'pesta_unesa';
  error_reporting(0);
  mysql_connect($host, $user, $password) or die ('Gagal Koneksi Ke MySQL Server');
  
  mysql_select_db($db) or die ('Gagal Koneksi Ke Database Pesta Unesa');
  
define('VALIDASI',1);
include "fungsigambar.php";


$zz=mysql_fetch_array(mysql_query("Select * from profil where id_profil='1'"));
$namaprofil=$zz[namaclub];
$alamatprofil=$zz[alamat];
$kodeposprofil=$zz[kodepos];
$faxprofil=$zz[fax];
$no_telponprofil=$zz[no_hp];
?>
