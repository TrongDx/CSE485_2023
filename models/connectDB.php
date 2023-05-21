<?php
     $host = 'localhost';
     $dbname = 'tlu';
     $username = 'root';
     $password = '';
     $conn = mysqli_connect($host, $username, $password, $dbname);
    if(!$conn){
        die("Ket noi that bai. Vui long kiem tra lai cac thong tin may chu");
    }
?>