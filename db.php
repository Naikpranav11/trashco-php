<?php 
// $servername = "localhost";
// $dusername = "root";
// $dpassword = "";
// $dbname = "trashco";

// $conn = mysqli_connect($servername,$dusername,$dpassword,$dbname);
$conn = mysqli_connect("localhost","root","","trashco");

if($conn) {
    // echo "Connection ok";
}

else {
    echo "Connection failed".mysqli_connect_error();
}


?>