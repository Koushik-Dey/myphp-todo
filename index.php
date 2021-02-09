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


if(isset($_POST['todo_title'])) {
    
    $todo_title=$_POST['todo_title'];
    $sql="INSERT INTO todos SET title=:todo_title,is_completed=0";
    $stmt=$conn->prepare($sql);
    $stmt->execute ([
        ":todo_title" =>$todo_title
    ]);

    if ($stmt->rowCount()>0) {
        echo "Data was inserted successfully";
    }
    else {
        echo"Sorry data was not inseted successfully";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo app</title>
</head>
<body>
   <form method="post">
   <label for="todo_title">Todo Title</label>
   <input type="text" name="todo_title">
   <button type="submit">submit</button>



   
   </form> 

</body>
</html>