<?php
session_start(); //untuk memulai sesi

//untuk dihapus selanjutnya
session_destroy()
;

header("location: login.php");
    exit();
?>
