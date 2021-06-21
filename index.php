<?php
$severname="localhost";
$user="root";
$password="";
try{
    $server ="mysql:host=localhost;dbname=name";
$user = "root";
$pass = "";
$conn = new PDO($server, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST["name"];
        $age=$_POST["age"];
        $sql="INSERT INTO age(`name`, `age`) VALUES(:name,:age)";
        $stmt=$conn->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':age', $age);
        // echo "thanks for comming";
        // $conn->exec($sql);
        $Execute=$stmt->execute();

    }
} catch(PDOException $e) {
    echo $e->getMessage();
    echo "please a right data";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name" placeholder="name"/>
    <br>
<br>
    <input type="age"name="age"placeholder="age">
     <br>
     <br>
     <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>