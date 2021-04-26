<?php
	//untuk menghapus session
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    echo "<script>alert('Anda telah logout!');history.go(-1);</script>";
    header("Location: index.php");
?>