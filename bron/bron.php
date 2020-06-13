<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "id13188735_myeasyfitness";


function connect(){
    $conn = mysqli_connect("localhost", "root", "root", "id13188735_myeasyfitness");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}
function addBron(){
if( $_POST ){
    $datefiled = date("Y-m-d", strtotime($_POST['TimeStart']));
$leavedate = date("Y-m-d", strtotime($_POST['TimeFinish']));
$sql = "INSERT INTO `timeslots` (`TimeStart`, `TimeFinish`) VALUES (`$TimeStart`, `$TimeFinish`)";
}
}

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());

    if (mysqli_query($conn, $sql)) {
       echo "OK!";
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>