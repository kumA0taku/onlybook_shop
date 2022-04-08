<?php 
class DBController {
    //my PC
private $user="onlybook";
private $pass="123456";
private $db="onlybook";
private $host="localhost";
private $conn;

    function __construct(){
    $this->conn = $this->connectDB();
    }    

    function connectDB(){
    $conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    return $conn;

    }
    function runQuery($query){
        $result = mysqli_query($this->conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;

        }
    function numRows($query){
    $result = mysqli_query($this->conn, $query);
    $rowcount = mysqli_num_rows($result);
    return $rowcount;
    }
}
?>
