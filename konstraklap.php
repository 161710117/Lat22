<?php

require_once 'konstrak.php';

$laptop = new laptop('Asus','15 inch','Silver');
echo "Nama Merk = ".$laptop->get_merk();
echo "<br />";
echo "Ukuran = ".$laptop->get_ukuran();
echo "<br />";
echo "Warna = ".$laptop->get_warna();
echo "<br />";
?>