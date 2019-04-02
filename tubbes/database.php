<?php
function connectToDatabase() {
	$connection = mysqli_connect('localhost', 'root', '', 'tubes_web');
	return $connection;
}

function selectAllMakanan($connection) {
	return mysqli_query($connection, 'SELECT * FROM makanan');
}

function selectKategoriAppetizer($connection){
	return mysqli_query($connection, 'SELECT * FROM makanan WHERE kategori_makanan = "nasi goreng"');
}

function runQuery($query){
	$result = mysqli_query($this->connection, $query);
}

?>