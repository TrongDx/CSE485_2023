<?php
session_start();
include '../models/connectDB.php';

if (isset($_POST['loginUserName'])) {
   $username = $_POST['loginUserName'];
}
if (isset($_POST['loginPassword'])) {
    $password = $_POST['loginPassword'];
}

$sql = "SELECT * FROM users WHERE username=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$rs = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($rs) > 0) {
    $row = mysqli_fetch_assoc($rs);
    $pass_hash = $row['password'];
    $position = $row['position'];
    if ($password == $pass_hash) {
        if ($position == 'Teacher') {
            $_SESSION['Teacher'] = $username;
            header("location:../view/dashboard.php");
            exit;
        }
        if ($position == 'Manager') {
            $_SESSION['Manager'] = $username;
            header("location:../view/index.php");
            exit;
        }
        if ($position == 'Student') {
            $_SESSION['Student'] = $username;
            header("location:../view/dashboard.php");
            exit;
        }
    } else {
        echo 'Mật khẩu không chính xác';
    }
}
?>
