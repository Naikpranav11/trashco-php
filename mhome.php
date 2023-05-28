<?php 
 include 'db.php';
if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $upi      = $_POST['upi'];
    $address  = $_POST['address'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];

    // echo $fullname,$username,$email,$upi,$address,$phone,$password,$conpassword,$gender;
    // $sql =  "INSERT INTO registration VALUES('$fullname','$username','$email','$upi','$address','$phone','$password','$conpassword','$gender')";
    // $sql =  "insert into 'registration'  ('fullname','username','email','upi','address','phone','password','conpassword','gender')VALUES('".$fullname."', '".$username."','".$email ."','".$upi ."','". $address."','".$phone ."','". $password."','".$conpassword."','".$gender."')";
    $sql = " INSERT INTO `registration` (`fullname`, `username`, `email`, `upi`, `address`, `phone`, `password`, `conpassword`, `gender`) VALUES ('$fullname','$username','$email','$upi','$address','$phone','$password','$conpassword','$gender')";



    $r = mysqli_query($conn,$sql);

    if($r){
        echo "Inserted succesfully";
    }

    else {
        echo "not inserted";
    }

}
?>