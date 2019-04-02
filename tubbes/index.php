<?php require_once('template/helper.php'); ?>

<?php render('header', array('title' => '')); ?>

        <!-- Header -->
        <header id="hello">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">
                            <h3>-introducing-</h3>
                            <h1>SUSHI KNIGHT</h1>

                            <div class="inner_banner">
                                <div class="banner_content">
                                    <p> Makan sushi enak, 
                                    kaga amis</p>                          
                                </div>
                                <div class="stamp">
                                    <img src="images/stamp.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            <p class="caption">*Limited Time Only</p>
        </header><!-- Header end -->

        <!-- Block Content -->
        <section id="block">
            <div class="container">

                <!-- First section -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="feature">
                            <div class="shack_burger">
                                <div class="chicken">
                                    <img src="images/chicken.png" alt="Chicken" />
                                </div>
                                <br>
                                <h2>Volcano Sushi </h2>
                                <p>Sushi dengan ebi tempura, crabmeat, kyuri, telur ikan tobiko dan spicy mayo</p>
                            </div>
                            <p class="caption">*Limited Time Only</p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-4">
                        <div class="signature">
                            <div class="shape">
                                <span class="flaticon flaticon-burger"></span>
                                <p>signature</p>
                            </div>
                            <div class="signature_content">
                                <p>It used to be a Secret but not any more! Our tribute to the King is a Cheddar Beef Patty,</p>
                            </div>
                        </div>
                    </div> -->
                </div><!-- first section end -->

                <!-- Third section -->
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h3>Salmon Sashimi</h3>
                                

                                <p>makanan laut dengan kesegaran prima yang langsung dimakan dalam keadaan mentah bersama penyedap seperti kecap asin, parutan jahe, dan wasabi..</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h3>Salmon Sashimi</h3>

                                <p>makanan laut dengan kesegaran prima yang langsung dimakan dalam keadaan mentah bersama penyedap seperti kecap asin, parutan jahe, dan wasabi.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h3>Salmon Sashimi</h3>

                                <p>makanan laut dengan kesegaran prima yang langsung dimakan dalam keadaan mentah bersama penyedap seperti kecap asin, parutan jahe, dan wasabi.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->

                <!-- Forth section -->
                
            </div>
        </section><!-- Block Content end-->
        <br>
        <br>

<?php render('footer'); ?>