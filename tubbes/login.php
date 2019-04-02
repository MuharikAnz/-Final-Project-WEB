<?php 
    session_start();
?>

<?php require_once('template/helper.php') ?>

<?php
    //connect to database 
    $db = mysqli_connect("localhost", "root", "", "tubes_web");

    if(isset($_POST['login_btn'])){
        
        $password = mysqli_real_escape_string($db, $_POST['sandi']);

        $username = mysqli_real_escape_string($db, $_POST['username']);

        //cek ada data yang belum diisi?
        // if(empty($email)){
        //     array_push($errors, "Email belum diisi");
        // }
        // if(empty($password)){
        //     array_push($errors, "Password belum diisi");
        // }       

        //if(count($errors) == 0){
            $password = md5($password); //rememmber we hashed password before storing last time
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result))  
            {
                $_SESSION['nama'] = $row["nama_user"];
            }

            if(mysqli_num_rows($result) == 1){
                // succes logged in
                $_SESSION['logged'] = 'True';
                $_SESSION['massage'] = "You are now logged in";
                $_SESSION['username'] = $username;
                header("location: index.php"); //redirect to home page
                exit();
            }else{
                // failed logged in
                $_SESSION['logged'] = 'False';
                $_SESSION['massage'] = "Username or Password is incorrect";
            }
       // }
    }
?>

<?php render('header', array('title' => 'login')); ?>


        <section id="block">

	<div id="box1">
	<form method="POST" action="login.php" class="text-center">
    <br>
	   <h1>Login</h1>
       <br>
            <tr>
                <td>username</td><br>
                <td><input type="text" name="username" class="textInput" placeholder="Masukkan username Anda"></td><br>
            </tr>
            <tr>
                <td>Sandi</td><br>
                <td><input type="password" name="sandi" class="textInput" placeholder="Masukkan kata sandi Anda"></td><br>
            </tr>
            </tr>
              <tr>
                <td></td><br>
                <td><input type="submit" name="login_btn" value="Login" class="btn"></td><br>
            </tr>
            <p>Don't have any account?<a href="register.php">Register</a></p>
	</form>
	</div>
	</section>
    <br><br>

<?php render('footer'); ?>