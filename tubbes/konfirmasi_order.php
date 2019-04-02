<?php   
 $db = mysqli_connect("localhost", "root", "", "tubes_web");  
 ?> 

<?php require_once('template/helper.php') ?>

<?php  render('header', array('title' => 'menu'));?>

<br />  
           <div class="container" style="width:800px; color: black; border: 5px solid black; margin-bottom: 20px;">  
             
                     <h3 align="center">Order Summary for Order</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Customer Details</label></td>  
                               </tr>  
                               <tr>
                               <?php

                               		$username = $_SESSION['username'];
                               		$no_transaksi = $_GET["no_transaksi"];
                               		$customerdetail = ("SELECT * FROM user WHERE username = '$username'");
                               		$result = mysqli_query($db, $customerdetail);
                               		while ($row = mysqli_fetch_array($result)) {
                               			$nama = $row["nama_user"];
                               			$id_user = $row["id_user"];
                               			$jalan = $row["jalan"];
                               			$rt_rw = $row["rt_rw"];
                               			$kecamatan = $row["kecamatan"];
                               			$kelurahan = $row["kelurahan"];
                               			$provinsi = $row["provinsi"];
                               			$kodepos = $row["kode_pos"];
                               			$notelp = $row["no_telp"];
                               		}


                                ?>  
                                <tr>
                                	<td> Nama : <?php echo $nama ; ?> </td>
                                </tr>
                                    <td> Alamat : <?php echo $jalan ; ?>, <?php echo $kecamatan; ?>, <?php echo $kelurahan; ?>, <?php echo $provinsi; ?> </td>  	     
                               </tr>
                               		<tr>
                               			<td> No telp : <?php echo $notelp; ?> </td>
                               		</tr>
                               <tr>  
                                    <td><label>Order Details</label></td>  
                               </tr>
                               		<<?php  ?>
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th>  
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr> 
                                              <?php
                                              $total=0;
                                          	$productsql = ("SELECT * FROM detail_order WHERE no_transaksi = '$no_transaksi' and no_user = '$id_user' ");
                                           $result= mysqli_query($db, $productsql);
                               		while ($row = mysqli_fetch_array($result)) {
                                          	$sql1 = ("SELECT * FROM makanan WHERE id_makanan = '".$row['no_makanan']."'");
                                           $result2= mysqli_query($db, $sql1);
while ($row2 = mysqli_fetch_array($result2)) {  $nama=$row2["nama_makanan"]; $harga=$row2["harga_makanan"];   }                          					?>
                               					                                              <tr>  
                                                   <th width="50%"><?php echo $nama ?></th>  
                                                   <th width="15%"><?php echo $row["jumlah_makanan"]?></th>  
                                                   <th width="15%"><?php echo $harga ?></th>  
                                                   <th width="20%"><?php echo $row["total_harga"]?></th>  
                                              </tr> 
                               				 	
                               				 <?php 
 $total+=$row["total_harga"];
                               				} ?>   
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td><?php  echo number_format($total, 2); ?></td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>  
                     </div>  
                
                <div class="text-center" >
                	<form method="POST" action="index.php">
                	<input type="submit" name="konfirmasi" class="btn btn-warning" value="Confirm" />
                	</form>
                </div>
            
           </div>  

<?php render('footer'); ?>