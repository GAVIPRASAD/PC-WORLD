<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custompcs</title>
</head>
<body>
    <?php
    
    
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="pc";
    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn -> connect_error) {
        die("Connection Failed: ".$conn -> connect_error);
    }

    $sql = "INSERT INTO custom (name,phone,motherboard,ram,rom,cpu,gpu) values ('$_POST[name]','$_POST[phone]','$_POST[motherboard]',
    '$_POST[ram]','$_POST[rom]','$_POST[cpu]','$_POST[gpu]')";


    try {
        if ($conn->query($sql) === TRUE) {
            echo "<h1>We'll Reach You Shortly!..........Wait for our mail</h1>";
            echo "<br> <h1><a href='./index.html'>Home</a></h1> <br>";
        }
      }
      //catch exception
      catch(Exception $e) {
        echo "<h1>Enter valid Details</h1>";
        echo "<br><h1><a href='./Custompcs.html'>ReEnter Details</a></h1> <br>";
      }
   
    ?>
</body>
</html>