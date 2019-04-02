<?php   
 $connect = mysqli_connect("localhost", "root", "", "tubes_web");  
 ?> 

<?php require_once('template/helper.php') ?>

<?php  render('header', array('title' => 'menu'));?> 

 <br/>  
 <h2 class="judul"><?php echo  $_GET['tipe']?></h2> 
   <div class="container">  
    
             <div id="products" class="tab-pane fade in active">  
             <?php  
             $query = "SELECT * FROM makanan WHERE kategori_makanan = '" . $_GET['tipe'] . "' ORDER BY id_makanan ASC";  
             $result = mysqli_query($connect, $query);  
             while($row = mysqli_fetch_array($result))  
             {  
             ?>  
             <div class="col-md-4">  
                  <div class="kotak_makanan" align="center">  
                       <img src="images/makanan/<?php echo $row["gambar_makanan"]; ?>" class="img-responsive" /><br />  
                       <h4 class="text-info"><?php echo $row["nama_makanan"]; ?></h4>  
                       <h4 class="text-danger">$ <?php echo $row["harga_makanan"]; ?></h4>  
                       <input type="text" name="quantity" id="quantity<?php echo $row["id_makanan"]; ?>" class="form-control" value="1" />  
                       <input type="hidden" name="hidden_name" id="name<?php echo $row["id_makanan"]; ?>" value="<?php echo $row["nama_makanan"]; ?>" />  
                       <input type="hidden" name="hidden_price" id="price<?php echo $row["id_makanan"]; ?>" value="<?php echo $row["harga_makanan"]; ?>" />
                       
                       <?php 
                            if (isset($_SESSION['logged'])) { ?>
                               <input class="btn btn-warning form-control add_to_cart" id="<?php echo $row["id_makanan"]; ?>" type="button" name="add_to_cart" value="Add to Cart"/>
                        <?php
                          }
                        ?>
                         
                  </div>  
             </div>  
             <?php  
             }  
             ?>  
        </div>  
   </div> 
   <br>
   <br>

<?php render('footer'); ?>

<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");   
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>



<!-- menu pertama
    <?php
  //session_start();
    //require_once 'database.php';

    //$connection = connectToDatabase();
    //$query = selectAllMakanan($connection);
?>

<div class="makanan-list" style="width: 100%/3">
    <div class="container grid-container">
        <?php 
      //      while ($data = mysqli_fetch_assoc($query)) {
        //        include 'template/makanan_item.php';
         //   }
        ?>
    </div>
</div>

