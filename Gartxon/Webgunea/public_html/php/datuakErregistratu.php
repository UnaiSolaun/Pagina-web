<?php
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "Gartxon";

    $Erabiltzailea=$_POST['usuario'];
    $Izena=$_POST['izena'];
    $Abizena=$_POST['abizena'];
    $NAN=$_POST['NAN'];
    $Sexua=$_POST['hm'];
    $JaiotzeData=$_POST['JaiotzaData'];
    $Mugikorra=$_POST['mugikorra'];
    $Posta=$_POST['posta'];
    $Pasahitza=$_POST['password'];
    $Pasahitza2=$_POST['password2'];

    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
  
  $query = mysqli_query($conn, "INSERT INTO Erregistroa (Erabiltzailea, Izena, Abizenak, NAN, Sexua, JaiotzeData, MugikorraPosta, Pasahitza1, Pasahitza2) VALUES ($Erabiltzailea, $Izena, $Abizena, $NAN, $Sexua, $JaiotzeData, $Mugikorra, $Posta, $Pasahitza,  $Pasahitza2)")
     or die (mysqli_error($conn));

  /*while ($row = mysqli_fetch_array($query)) {
    echo
     "<tr>
      <td>{$row['id']}</td>
      <td>{$row['nombre']}</td>
     </tr>";
     
  
  }*/
?>