<?php
    session_start();
    if (!isset($_SESSION['isLogin'])){
        header("Location: login.php");
    }else {
        echo 'Mungkin Masih Tersimpan Sesi Terakhir <a href="logout.php">LoogOut</a>';        
    }
?>