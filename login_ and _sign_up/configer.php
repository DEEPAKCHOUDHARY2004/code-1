<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="login_rigester_pure_coding";


$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
  die("<script>alert('connection faild.')</script>");
}
// else{
//   echo "<script>alert('connection seccess.')</script>";
// }





?>