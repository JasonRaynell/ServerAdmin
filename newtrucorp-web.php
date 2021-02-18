<?php
$link = mysqli_connect("172.18.0.2","root","UAS","Trucorp");

if (!$link){
echo "Tidak bisa konek". PHP_EOL;
echo "<br>";
exit();
}

$query = "SELECT * FROM users";

if($result = mysqli_query($link,$query)){
$rowcount = mysqli_num_rows($result);
echo "The Total ID is: ".$rowcount;
}
mysqli_close($link);
?>
