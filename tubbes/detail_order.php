<?php require_once('template/helper.php') ?>

<?php
 	$connect = mysqli_connect("localhost", "root", "", "tubes_web");   
 ?>  

 <?php
 	
 ?>

<?php  render('header', array('title' => 'detail_order'));?> 

<h2 class="judul">Order Summary</h2> 

<div class="table-responsive">  
      <table class="table">    
           <tr>  
                <td>  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="50%">Product Name</th>  
                               <th width="15%">Quantity</th>  
                               <th width="15%">Price</th>  
                               <th width="20%">Total</th>  
                          </tr>  
           
                          <tr>  
                               <td colspan="3" align="right"><label>Total</label></td>    
                          </tr>  
                     </table>  
                </td>  
           </tr>  
      </table>  
 </div> 
 

<?php render('footer'); ?>