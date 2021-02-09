<?php


$servername="localhost";
$username="root";
$password="adminadmin";
$database="Todo";
$dsn="mysql:host={$servername};dbname={$database}";


try {
    $conn = new PDO ($dsn,$username,$password);
}catch (PDOException $error) {
    die('Failed To Connect with the Database!');
}



    $sql="SELECT * FROM todos  ";
    $stmt=$conn->prepare($sql);
    
    $stmt->execute ();

   $todos=$stmt->fetchAll ();
   var_dump($todos);

?>