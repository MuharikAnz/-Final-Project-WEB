<div class="makanan-item">
	<div class="card">
		<img class="image" src="<?php echo $data['gambar_makanan'] ?>" alt="Menu1">
		<!-- <?php echo "<img src='".$data['gambar_makanan']."' alt='Menu1' width='200px' >"?> -->
		<div class="container">
			<h4><?php echo $data['nama_makanan'] ?> <br></h4>
			<p class="harga"><?php echo $data['harga_makanan'] ?></p>
			<p class="deskripsi"><?php echo $data['deskripsi_makanan'] ?></p>
		</div>	
		<div class="btn-holder">
			<p><button class="button">Add to Cart</button></p>
		</div>			
	</div>	
</div>

<!-- <?php //echo "<img src=images/makanan/'".$data['gambar_makanan'].'.jpg'"' alt='Menu1' style='width:100%'"?>  -->