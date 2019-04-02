
<?php require_once('template/helper.php') ?>


<?php render('header', array('title' => 'kategori')); ?>

<?php
    $db = mysqli_connect("localhost", "root", "", "tubes_web");

?>

<h2 class="judul">Kategori Menu</h2>     
<div class = "kategori">
    <div class="grid-container">
        <div class="kategori1">
          <a href="menu.php?tipe=Appetizer" name="kategori1">
            <div class="container-kategori">
               <img src="images/makanan/meenu_181114_0008.jpg" alt="Appetizer" class="image">
               <div class="overlay">Appetizer</div>
            </div>
          </a>
        </div>

         <div class="kategori2">
          <div class="container-kategori">
             <a href="menu.php?tipe=Makimono" name="kategori1">
               <img src="images/makanan/meenu_181114_0009.jpg" alt="Makimono" class="image">
               <div class="overlay">Makimono</div>
             </a>
          </div>
        </div>

         <div class="kategoi3">
          <div class="container-kategori">
             <a href="menu.php?tipe=FushionIsi4" name="kategori1">
               <img src="images/makanan/meenu_181114_0014.jpg" alt="Fushion (isi 4)" class="image">
               <div class="overlay">Fushion Sushi Roll (isi 4)</div>
             </a>
          </div>
        </div>

        <div class="kategori4">
          <div class="container-kategori">
            <a href="menu.php?tipe=FushionIsi8" name="kategori1">
              <img src="images/makanan/meenu_181114_0019.jpg" alt="Fushion (isi 8)" class="image">
              <div class="overlay">Fushion Sushi Roll (isi 8)</div>
            </a>
          </div>
        </div>

         <div class="kategori5">
          <div class="container-kategori">
            <a href="menu.php?tipe=BombSushi" name="kategori1">
              <img src="images/makanan/meenu_181114_0020.jpg" alt="Bomb Sushi" class="image">
              <div class="overlay">Bomb Sushi</div>
            </a>
          </div>
        </div>

         <div class="kategori6">
          <div class="container-kategori">
            <a href="menu.php?tipe=GunkanSushi" name="kategori1">
              <img src="images/makanan/meenu_181114_0026.jpg" alt="Gunkan Sushi" class="image">
              <div class="overlay">Gunkan Sushi</div>
            </a>
          </div>
        </div>
    </div>
</div>

<?php render('footer'); ?>