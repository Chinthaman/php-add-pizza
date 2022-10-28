<?php $conn = mysqli_connect('localhost', 'data', 'data007', 'mani');

if(!$conn){
  echo 'connection errors' . mysqli_connect_error();
}else{

} 

$connB = mysqli_connect('localhost', 'admin', 'admin', 'login_register') or die('connection failed');

if(!$connB){
  echo 'connection errors' . mysqli_connect_error();
}else{

}
?>
