<?php

session_start();

if(!isset($_SESSION['username'])){
echo "you are logged out";
	header('location:login.php');
}
include 'dbcon.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php  include 'links/links.php' ?>
	<?php  include 'css/style.php' ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

  <script type="text/javascript">

  

function cidchange() {
          var cid=document.getElementById("cid");
          var tbl = document.getElementById('tbl');
          while(tbl.rows.length > 1) {
              tbl.deleteRow(1);
          }
          
          $.ajax(
          {
            url: "./get-report.php",
            type: 'POST',
            data :
            {
              'uid': cid.value
            },
            dataType:'json',
            success: function(data)
            {
              // alert(data);
              var tbl = document.getElementById('tbl');
              for(var i=1;i<(data.length+1);i++)
              {
                  var x=tbl.insertRow(i);
                  x1 = x.insertCell(0);
                  x2 = x.insertCell(1);
                  x3 = x.insertCell(2);
                  x4 = x.insertCell(3);
                  tbl.rows[i].cells[0].innerHTML=data[i-1]["0"];
                  tbl.rows[i].cells[1].innerHTML=data[i-1]["1"];
                  tbl.rows[i].cells[2].innerHTML=data[i-1]["2"];
                  tbl.rows[i].cells[3].innerHTML=data[i-1]["3"];
              }
            }
          } 
        );
        }
</script>

<body>

<header>
	<nav class="navbar">
		<div class="logo"> 
			<a href="home.php">Welcome <?php  echo  $_SESSION['username']; ?></a>
		</div>

		<div class="contact_btn">
      <a href="report.php">Report</a>
			<a href="logout.php">Logout</a>
		</div>
	</nav>

	<div class="center_content">

    <div class='row'>
      <div class='col-12'>
      <select name="cid" id="cid" class="form-control" onchange="cidchange()">
      <option disabled selected>Select</option>
        <?php
        $query="SELECT * from registration";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
            $option="<option value='".$row['id']."'>".$row['name']."</option>";
            echo $option;
        }
        ?>
      </select>

        <br />
        <table class="table text-left table-bordered" id="tbl">
        <tbody>
        <tr>
          <td>Sr.No.</td>
          <td>Date</td>
          <td>Slot</td>
          <td>Event</td>
        </tr>
        </tbody>
    </table>
      </div>

    </div>

	</div>

	<div class="social_network">
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#" target="_blank">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-youtube" aria-hidden="true"></i>
			</a>
		</div>
	</div>
  

	
</header>
  

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>