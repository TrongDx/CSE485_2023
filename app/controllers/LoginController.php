<?php
session_start();
require_once '../libs/connectDB.php';

if (isset($_POST['loginUserName'])) {
   $username = $_POST['loginUserName'];
}
if (isset($_POST['loginPassword'])) {
    $password = $_POST['loginPassword'];
}
$dbConnection = new DBConnection();
$conn = $dbConnection->getConnection();

$sql = "SELECT * FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$rs = $stmt->fetchAll();

if (count($rs) > 0) {
    $row = $rs[0];
    // $row = mysqli_fetch_assoc($rs);
    $pass_hash = $row['password'];
    $position = $row['position'];
    if ($password == $pass_hash) {
        if ($position == 'supervisor') {
            $_SESSION['supervisor'] = $username;
            header("location:../view/dashboard.php");
            exit;
        }
        if ($position == 'manager') {
            $_SESSION['manager'] = $username;
            header("location:../view/index.php");
            exit;
        }
        if ($position == 'employee') {
            $_SESSION['employee'] = $username;
            header("location:../view/dashboard.php");
            exit;
        }
    } else {
        echo 'Mật khẩu không chính xác';
    }
}
?>
