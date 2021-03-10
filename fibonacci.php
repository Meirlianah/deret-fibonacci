<?php
function print_deret_fibonacci($jumlah)
{
	//menyiapkan 2 angka awal
	$angka_sebelumnya=0;
	$angka_sekarang=1;

	//menyimpan string angka aawal
	$hasil = "$angka_sebelumnya $angka_sekarang";

	for ($i=0; $i<$jumlah-2; $i++)
	{
		//menghitung angka fibonacci
		$output = $angka_sekarang + $angka_sebelumnya;

		//hasilnya ditambahkan ke string $hasil
		$hasil = $hasil." $output";


		//menyiapkan angka untuk perhitungan berikutnya
		$angka_sebelumnya = $angka_sekarang;
		$angka_sekarang = $output;
	}
	return $hasil;
}

echo print_deret_fibonacci(10);
echo "<br>";

?>