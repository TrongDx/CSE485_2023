<?php
class ConnectDatabase
{
    private $host = 'localhost';
    private $dbname = 'tlu';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Kết nối thành công!";
        } catch (Exception $e) {
            die("Could not connect to the database $this->dbname :" . $e->getMessage());
        }
    }
}
$database = new ConnectDatabase();
?>