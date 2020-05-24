<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include 'dbcon.php';
  $sql = "";
  if($aid != '-1')
    $sql = "update booking set note='$anote' where id='$aid'";
  else
    $sql = "insert into booking(date, slot, note, uid) values('$date', '$aslot', '$anote', '$uid')";
  $result = mysqli_query($con, $sql);
  if($result)
    echo "OK";
  else
    echo "-1";
}
else
  echo "-1";
?>