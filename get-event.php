<?php
header('Content-Type: application/json'); 
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include 'dbcon.php';
  $sql = "select * from booking where uid=$uid and date='$date'";
  $result = mysqli_query($con, $sql);
  if($result)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $obj = array();
      $obj['0'] = $row['id'];
      $obj['1'] = $row['slot'];
      $obj['2'] = $row['note'];
      array_push($response, $obj);
    }
  }
  echo json_encode($response);
}
else
  echo json_encode($response);
?>