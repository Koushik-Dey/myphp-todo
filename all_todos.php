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
   

   foreach ($todos  as $todo) {
       
      echo $todo ['title'];
      echo"<br>";
    // var_dump($todo);

   }

?>