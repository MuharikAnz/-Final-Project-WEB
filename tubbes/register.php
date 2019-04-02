<?php require_once('template/helper.php') ?>

<?php

    //connect to database 
    $db = mysqli_connect("localhost", "root", "", "tubes_web");

    if(isset($_POST['register_btn'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $nama_user = mysqli_real_escape_string($db, $_POST['nama']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['sandi']);
        $password2 = mysqli_real_escape_string($db, $_POST['sandi2']);
        $no_telp = mysqli_real_escape_string($db, $_POST['telepon']);
        $jalan = mysqli_real_escape_string($db, $_POST['jalan']);
        $rt_rw = mysqli_real_escape_string($db, $_POST['rtrw']);
        $kecamatan = mysqli_real_escape_string($db, $_POST['kecamatan']);
        $kelurahan = mysqli_real_escape_string($db, $_POST['kelurahan']);
        $provinsi = mysqli_real_escape_string($db, $_POST['provinsi']);
        $kode_pos = mysqli_real_escape_string($db, $_POST['kodepos']);


        if($password == $password2){
            //create user
            $password = md5($password2); //hash password before storing for security purpose 
            $sql  = "INSERT INTO user (username, nama_user, email, password, no_telp, jalan, rt_rw, kecamatan, kelurahan, provinsi, kode_pos) VALUES ('$username', '$nama_user', '$email', '$password', '$no_telp', '$jalan', '$rt_rw', '$kecamatan', '$kelurahan', '$provinsi', '$kode_pos')";
            mysqli_query($db, $sql);
            $_SESSION['massage'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header('location: index.php'); //redirect to home 
        }else{
            // failed create user
            $_SESSION['massage'] = "Password do not match, please re-enter same password";

        }
    }
?>

<?php render('header', array('title' => 'register')); ?>

           
    <section id="block">  
        </div>  
        <div id="box1">
         <div class="header">
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <div class="col-md-12">
                    <div class="col-md-6">
                <tr>
                    <td>Username</td><br>
                    <td><input type="text" name="username" class="textInput" placeholder="Masukkan username Anda"></td><br>
                </tr>
                <tr>
                    <td>Nama</td><br>
                    <td><input type="text" name="nama" class="textInput" placeholder="Masukkan nama Anda"></td><br>
                </tr>
                <tr>
                    <td>Email</td><br>
                    <td><input type="email" name="email" class="textInput" placeholder="Masukkan email Anda"></td><br>
                </tr>
                <tr>
                    <td>Sandi</td><br>
                    <td><input type="password" name="sandi" class="textInput" placeholder="Masukkan kata sandi Anda"></td><br>
                </tr>
                <tr>
                    <td>Konfirmasi Sandi</td><br>
                    <td><input type="password" name="sandi2" class="textInput" placeholder="Masukkan ulang sandi Anda"></td><br>
                </tr>
                <tr>
                    <td>Nomor Telpon</td><br>
                    <td><input type="text" name="telepon" class="textInput" placeholder="Masukkan nomor telepon Anda"></td><br>
                </tr>
                 <tr>
                    <td></td><br>
                    <td><input type="submit" name="register_btn" value="Register"></td><br>
                </tr>
            </div>
            <div class="col-md-6">
                 <tr>
                    <td>Alamat</td><br>
                    <td><input type="text" name="jalan" class="textInput" placeholder="Masukkan alamat lengkap Anda"></td><br>
                    <td><input type="text" name="rtrw" class="textInput" placeholder="Masukkan RT / RW Anda"></td><br>
                    <td><input type="text" name="kecamatan" class="textInput" placeholder="Masukkan Kecamatan Anda"></td><br>
                    <td><input type="text" name="kelurahan" class="textInput" placeholder="Masukkan Kelurahan Anda"></td><br>
                    <td><input type="text" name="provinsi" class="textInput" placeholder="Masukkan Provinsi Anda"></td><br>
                </tr>
                <tr>
                    <td>Kode Pos</td><br>
                    <td><input type="text" name="kodepos" class="textInput" placeholder="Masukkan Kode Pos Anda"></td><br>
                </tr>
            </div>
            </form>
        </div>
        <div> 
            <p>Already have account? <a href="login.php">Login</a></p>
        </div>
    </section>
<br>
<br>
<?php render('footer'); ?>
