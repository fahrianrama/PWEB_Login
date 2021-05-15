<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        include("index.php");
    }
    else {
    ?>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form name="form-login" method="POST" action="index.php" class="box">
                        <h1>Status</h1>
                        <p class="teks"> Login Berhasil!</p> 
                        <input type="submit" name="submit" value="Logout" href="#">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
?>