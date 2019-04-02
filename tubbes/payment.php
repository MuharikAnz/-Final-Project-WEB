<?php require_once('template/helper.php') ?>

<?php render('header', array('title' => 'payment')); ?>

        <div class="box1">

        <div id="box2">
        	<div class="shopping1">
        	<div class="title">
    		Shopping Bag
  			</div>

  			<div class="image">
      		<img src="images/menu1.jpg" alt="Sushi Knight Roll" align="left">
    		</div>

    		<div class="description">
      		<span>Sushi Knight Roll</span>
      		<img src="images/pencil.png" alt="pencil" align="left">
            <input class="input1" type="text" name="Notes" cols="20" rows="1" placeholder="Notes">
    		</div>

        	<div class="quantity">
      		<button class="plus" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button>
      		<input class="input2" type="text" name="name" value="1">
      		<button class="minus" type="button" name="button"><i class="glyphicon glyphicon-minus"></i></button>
    		</div>

    		<div class="total-price">Total : $5</div>
  			</div>

            <div class="harga">
            <p><u><b>Total Payment : Rp....</b></u></p>
            </div>
        </div>

        <div id="box3">
        <h4>Detail Pesanan</h4>
        <p>
            <br><br>
            Nama Pelanggan:<br>
            Alamat        :<br> 
            Nomor Telepon :<br>
            Email         :<br>
            Note          :
        </p>
        <textarea name="Notes" cols="25" rows="2" placeholder="Keterangan"></textarea>
        </div>

        <div class="bayar">
        <br> 
        <button type="button">Bayar</button>
        </div>
        </div>

        <br><br>
    <!-- Footer -->
        <footer>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="contact_us">
                            <h4>Contact Us</h4>
                            <a href="">+62-821-1404-7657</a>

                            <address>
                                <a target="_blank" href="https://www.google.co.id/maps/place/Sushi+Knight/@-6.223844,106.8268237,15z/data=!4m5!3m4!1s0x0:0x7a3ca431dd83755c!8m2!3d-6.223844!4d106.8268237">ITC Kuningan, Jalan Jembatan II No.57, RT.8/RW.5, Mall Ambassador, Setiabudi, South Jakarta City, DKI Jakarta</a>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                        <div class="basic_info">
                            <a href=""><img class="footer_logo" src="images/footer_logo.png" alt="Burger" /></a>

                            <ul class="list-inline social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                            </ul>

                            <div class="footer-copyright">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with 
                                    <i class="fa fa-heart"></i>
                                    by Fauzan, Riki, Ristra, & Shelvy
                                </p>
                            </div>                  
                        </div>
                    </div>

                </div>
            </div><!-- Container end -->
        </footer><!-- Footer end -->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>


        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>
        <script src="payment1.js"></script>
</body>
</html>