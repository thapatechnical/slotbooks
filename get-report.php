<?php
header('Content-Type: application/json'); 
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include 'dbcon.php';
  $sql = "select * from booking where uid=$uid order by date desc";
  $result = mysqli_query($con, $sql);
  if($result)
  {
    $i = 1;
    while ($row = mysqli_fetch_array($result))
    {
      $obj = array();
      $obj['0'] = $i++;
      $obj['1'] = $row['date'];
      $slot = $row['slot'];
      $sname = '';
      if($slot == "s0")
        $sname = '0-1';
      else if($slot == 's1')
        $sname = '1-2';
      else if($slot == 's2')
        $sname = '2-3';
      else if($slot == 's3')
        $sname = '3-4';
      else if($slot == 's4')
        $sname = '4-5';
      else if($slot == 's5')
        $sname = '5-6';
      else if($slot == 's6')
        $sname = '6-7';
      else if($slot == 's7')
        $sname = '7-8';
      else if($slot == 's8')
        $sname = '8-9';
      else if($slot == 's9')
        $sname = '9-10';
      else if($slot == 's10')
        $sname = '10-11';
      else if($slot == 's11')
        $sname = '11-12';
      else if($slot == 's12')
        $sname = '12-13';
      else if($slot == 's13')
        $sname = '13-14';
      else if($slot == 's14')
        $sname = '14-15';
      else if($slot == 's15')
        $sname = '15-16';
      else if($slot == 's16')
        $sname = '16-17';
      else if($slot == 's17')
        $sname = '17-18';
      else if($slot == 's18')
        $sname = '18-19';
      else if($slot == 's19')
        $sname = '19-20';
      else if($slot == 's20')
        $sname = '20-21';
      else if($slot == 's21')
        $sname = '21-22';  
      else if($slot == 's22')
        $sname = '22-23';
      else if($slot == 's23')
        $sname = '23-24';
      $obj['2'] = $sname;
      $obj['3'] = $row['note'];
      array_push($response, $obj);
    }
  }
  echo json_encode($response);
}
else
  echo json_encode($response);
?>