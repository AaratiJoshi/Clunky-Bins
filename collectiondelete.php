<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "failed to connect to server";
}

$collect = $_POST['serial'];
$sql = "delete  from `collection` where `collect_srno` = $collect";
$query = mysqli_query($conn,$sql);
if($query)
{
    echo "<SCRIPT>
    alert('record deleted successfully')
    window.location.replace('collectionlist.php')</script>";
}
mysqli_close($conn);
?>