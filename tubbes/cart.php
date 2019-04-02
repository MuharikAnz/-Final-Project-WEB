<?php require_once('template/helper.php') ?>

<?php   
  //connect to database  
  $db = mysqli_connect("localhost", "root", "", "tubes_web");  
?> 

<?php  render('header', array('title' => 'cart'));?> 

<h2 class="judul">Order List</h2>
<div class="table-responsive" id="order_table">  
   <table class="table table-bordered">  
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php  
        if(!empty($_SESSION["shopping_cart"]))  
        {  
             $total = 0;  
             foreach($_SESSION["shopping_cart"] as $keys => $values)  
             {                                               
        ?> 
         
        <tr>  
             <td><?php echo $values["product_name"]; ?></td>  
             <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
             <td align="right">Rp. <?php echo $values["product_price"]; ?></td>  
             <td align="right">Rp. <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
             <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
        </tr>  
        <?php  
                  $total = $total + ($values["product_quantity"] * $values["product_price"]);  
             }  
        ?>
        <?php           
          if(isset($_POST['order_btn'])){
              
              $username = $_SESSION["username"];
              $total_transaksi = $total;

              $orderBaru = ("SELECT id_transaksi FROM transaksi WHERE username = '$username' ORDER BY id_transaksi DESC LIMIT 1" );
              $result2 = mysqli_query($db, $orderBaru);
              // $no_transaksi = reset($orderBaru)['id_transaksi'];
              while($row = mysqli_fetch_array($result2)){
                $no_transaksi = $row["id_transaksi"];
              }

              echo $no_transaksi;
              $user_sql = ("SELECT id_user FROM user WHERE username = '$username'");
              $result = mysqli_query($db, $user_sql);

              while($row = mysqli_fetch_array($result)){
                $no_user = $row["id_user"];
              }
              
              echo $no_user;

              $sql_transaksi  = "INSERT INTO transaksi (username, total_transaksi) VALUES ('$username', '$total_transaksi')";
              mysqli_query($db, $sql_transaksi);

              foreach($_SESSION["shopping_cart"] as $keys => $values)  
              { 
                  $no_makanan = $values["product_id"];
                  $jumlah_makanan = $values["product_quantity"];
                  $total_harga = $values["product_quantity"] * $values["product_price"];
                  $sql_detail_order = "INSERT INTO detail_order (no_transaksi ,no_makanan, no_user ,jumlah_makanan, total_harga) VALUES ( '$no_transaksi', '$no_makanan', '$no_user' ,'$jumlah_makanan', '$total_harga')";
                   mysqli_query($db, $sql_detail_order);
               }


          }
        ?>
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">Rp. <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  
         <tr>  
             <td colspan="5" align="center">  
                  <form method="POST" action="konfirmasi_order.php?no_transaksi=<?php echo  $no_transaksi;  ?>">  
                       <input type="submit" name="order_btn" class="btn btn-warning" value="Order" href="konfirmasi_order.php?no_transaksi=<?php echo  $no_transaksi;  ?>" />  
                  </form>  
             </td>  
        </tr>  
        <?php  
        }  
        ?>  

   </table> 
</div>  

<?php render('footer'); ?>

<script> 
$(document).ready(function(data){  
   $(document).on('click', '.delete', function(){  
   var product_id = $(this).attr("id");  
   var action = "remove";  
       if(confirm("Are you sure you want to remove this product?"))  
       {  
            $.ajax({  
                 url:"action.php",  
                 method:"POST",  
                 dataType:"json",  
                 data:{product_id:product_id, action:action},  
                 success:function(data){  
                      $('#order_table').html(data.order_table);  
                      $('.badge').text(data.cart_item);  
                 }  
            });  
       }  
       else  
       {  
            return false;  
       }  
  }); 
 }); 
 </script>