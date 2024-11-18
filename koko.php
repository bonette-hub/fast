<html>
    <head>
        <title>information</title>
    </head>
    <body>
        <center>
        <h3>submit form</h3>
        <input type="text" name="user" placeholder="username"><br><br>
        <input type="password" name="pass" placeholder="password"><br><br>
        <input type="submit" name="send" value="submit">
        </center>

</body>
</html>
<?php
$con = mysqli_connect("localhost", "root", "", "manage");

if ($con) {
    echo "Database connected well<br>";
}

if (isset($_POST["send"])) {
    // Correct the variable assignment
    $a = $_POST["user"];  // Username
    $b = $_POST["pass"];  // Password
    
  
    $q = mysqli_query($con, "INSERT INTO people(username, password) VALUES ('$a', '$b')");
    
    if ($q) {
        echo "Data inserted well";
    } else {
        echo "Data not inserted well";
    }
    }
}
?>