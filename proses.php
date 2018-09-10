<?php 
	$jumlah = $_GET['jumlah'];

	function rekursif($jumlah){
	echo "*";	
	$jumlah--;
	if ($jumlah > 0) {
		rekursif($jumlah);
	}
}
rekursif($jumlah);
	echo "<br>";
	function rekursif1($jumlah){
	echo "*";	
	$jumlah--;
	if ($jumlah > 1) {
		rekursif1($jumlah);
	}
}
rekursif1($jumlah);

echo "<br>";
	function rekursif2($jumlah){
	echo "*";	
	$jumlah--;
	if ($jumlah > 2) {
		rekursif2($jumlah);
	}
}
rekursif2($jumlah);

echo "<br>";
	function rekursif3($jumlah){
	echo "*";	
	$jumlah--;
	if ($jumlah > 3) {
		rekursif3($jumlah);
	}
}
rekursif3($jumlah);

echo "<br>";
	function rekursif4($jumlah){
	echo "*";	
	$jumlah--;
	if ($jumlah > 4) {
		rekursif4($jumlah);
	}
}
rekursif4($jumlah);

?>
