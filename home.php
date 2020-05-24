<?php

session_start();

if(!isset($_SESSION['username'])){
echo "you are logged out";
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php  include 'links/links.php' ?>
	<?php  include 'css/style.php' ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

  <script type="text/javascript">

  function submitData(){
    let aid = document.getElementById('aid').value;
    let anote = document.getElementById('anote').value;
    let aslot = document.getElementById('aslot').value;
    var sdate = document.getElementById("sdate");
    let uid = sdate.name;
    $.ajax(
        {
          url: "./set-event.php",
          type: 'POST',
          data :
          {
            'aid': aid,
            'anote': anote,
            'aslot': aslot,
            'date': sdate.value,
            'uid': uid
          },
          dataType:'text',
          success: function(data)
          {
            if(data === 'OK')
            {
              alert("Event added..!!");
            }
            else
            {
              alert("Please try again..!!");
            }
            changeSchedule();
          }
        }
    );
  }

  function showModel(id)
  {
    let obj = document.getElementById(id);
    $('#aid').val(obj.getAttribute('bid'));
    $('#anote').val(obj.getAttribute('note'));
    $('#aslot').val(obj.getAttribute('slot'));
  }

    function changeSchedule(){
      var sdate = document.getElementById("sdate");
      if(sdate.value !== ""|| sdate.value !== undefined)
      {
        let uid = sdate.name;

        let s0 = document.getElementById('s0');
        s0.setAttribute("class", "openDialog btn btn-dark");
        s0.setAttribute("note", '');
        s0.setAttribute("slot", 's0');
        s0.setAttribute("bid", '-1');


        let s1 = document.getElementById('s1');
        s1.setAttribute("class", "openDialog btn btn-dark ml-2");
        s1.setAttribute("note", '');
        s1.setAttribute("slot", 's1');
        s1.setAttribute("bid", '-1');

        let s2 = document.getElementById('s2');
        s2.setAttribute("class", "openDialog btn btn-dark ml-2");
        s2.setAttribute("note", '');
        s2.setAttribute("slot", 's2');
        s2.setAttribute("bid", '-1');

        let s3 = document.getElementById('s3');
        s3.setAttribute("class", "openDialog btn btn-dark ml-2");
        s3.setAttribute("note", '');
        s3.setAttribute("slot", 's3');
        s3.setAttribute("bid", '-1');

        let s4 = document.getElementById('s4');
        s4.setAttribute("class", "openDialog btn btn-dark ml-2");
        s4.setAttribute("note", '');
        s4.setAttribute("slot", 's4');
        s4.setAttribute("bid", '-1');

        let s5 = document.getElementById('s5');
        s5.setAttribute("class", "openDialog btn btn-dark ml-2");
        s5.setAttribute("note", '');
        s5.setAttribute("slot", 's5');
        s5.setAttribute("bid", '-1');

        let s6 = document.getElementById('s6');
        s6.setAttribute("class", "openDialog btn btn-dark mt-2");
        s6.setAttribute("note", '');
        s6.setAttribute("slot", 's6');
        s6.setAttribute("bid", '-1');

        let s7 = document.getElementById('s7');
        s7.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s7.setAttribute("note", '');
        s7.setAttribute("slot", 's7');
        s7.setAttribute("bid", '-1');

        let s8 = document.getElementById('s8');
        s8.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s8.setAttribute("note", '');
        s8.setAttribute("slot", 's8');
        s8.setAttribute("bid", '-1');

        let s9 = document.getElementById('s9');
        s9.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s9.setAttribute("note", '');
        s9.setAttribute("slot", 's9');
        s9.setAttribute("bid", '-1');

        let s10 = document.getElementById('s10');
        s10.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s10.setAttribute("note", '');
        s10.setAttribute("slot", 's10');
        s10.setAttribute("bid", '-1');

        let s11 = document.getElementById('s11');
        s11.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s11.setAttribute("note", '');
        s11.setAttribute("slot", 's11');
        s11.setAttribute("bid", '-1');

        let s12 = document.getElementById('s12');
        s12.setAttribute("class", "openDialog btn btn-dark mt-2");
        s12.setAttribute("note", '');
        s12.setAttribute("slot", 's12');
        s12.setAttribute("bid", '-1');

        let s13 = document.getElementById('s13');
        s13.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s13.setAttribute("note", '');
        s13.setAttribute("slot", 's13');
        s13.setAttribute("bid", '-1');

        let s14 = document.getElementById('s14');
        s14.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s14.setAttribute("note", '');
        s14.setAttribute("slot", 's14');
        s14.setAttribute("bid", '-1');

        let s15 = document.getElementById('s15');
        s15.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s15.setAttribute("note", '');
        s15.setAttribute("slot", 's15');
        s15.setAttribute("bid", '-1');

        let s16 = document.getElementById('s16');
        s16.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s16.setAttribute("note", '');
        s16.setAttribute("slot", 's16');
        s16.setAttribute("bid", '-1');

        let s17 = document.getElementById('s17');
        s17.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s17.setAttribute("note", '');
        s17.setAttribute("slot", 's17');
        s17.setAttribute("bid", '-1');

        let s18 = document.getElementById('s18');
        s18.setAttribute("class", "openDialog btn btn-dark mt-2");
        s18.setAttribute("note", '');
        s18.setAttribute("slot", 's18');
        s18.setAttribute("bid", '-1');

        let s19 = document.getElementById('s19');
        s19.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s19.setAttribute("note", '');
        s19.setAttribute("slot", 's19');
        s19.setAttribute("bid", '-1');

        let s20 = document.getElementById('s20');
        s20.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s20.setAttribute("note", '');
        s20.setAttribute("slot", 's20');
        s20.setAttribute("bid", '-1');

        let s21 = document.getElementById('s21');
        s21.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s21.setAttribute("note", '');
        s21.setAttribute("slot", 's21');
        s21.setAttribute("bid", '-1');

        let s22 = document.getElementById('s22');
        s22.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s22.setAttribute("note", '');
        s22.setAttribute("slot", 's22');
        s22.setAttribute("bid", '-1');

        let s23 = document.getElementById('s23');
        s23.setAttribute("class", "openDialog btn btn-dark ml-2 mt-2");
        s23.setAttribute("note", '');
        s23.setAttribute("slot", 's23');
        s23.setAttribute("bid", '-1');

        $.ajax(
        {
          url: "./get-event.php",
          type: 'POST',
          data :
          {
            'date': sdate.value,
            'uid': uid
          },
          dataType:'json',
          success: function(data)
          {
            data.forEach(obj => {
              // alert(obj['0']);
              if(obj['1'] === 's0'){
                let s0 = document.getElementById('s0');
                s0.setAttribute("class", "openDialog btn btn-danger");
                s0.setAttribute("note", obj['2']);
                s0.setAttribute("slot", obj['1']);
                s0.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's1'){
                let s1 = document.getElementById('s1');
                s1.setAttribute("class", "openDialog btn btn-danger ml-2");
                s1.setAttribute("note", obj['2']);
                s1.setAttribute("slot", obj['1']);
                s1.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's2'){
                let s2 = document.getElementById('s2');
                s2.setAttribute("class", "openDialog btn btn-danger ml-2");
                s2.setAttribute("note", obj['2']);
                s2.setAttribute("slot", obj['1']);
                s2.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's3'){
                let s3 = document.getElementById('s3');
                s3.setAttribute("class", "openDialog btn btn-danger ml-2");
                s3.setAttribute("note", obj['2']);
                s3.setAttribute("slot", obj['1']);
                s3.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's4'){
                let s4 = document.getElementById('s4');
                s4.setAttribute("class", "openDialog btn btn-danger ml-2");
                s4.setAttribute("note", obj['2']);
                s4.setAttribute("slot", obj['1']);
                s4.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's5'){
                let s5 = document.getElementById('s5');
                s5.setAttribute("class", "openDialog btn btn-danger ml-2");
                s5.setAttribute("note", obj['2']);
                s5.setAttribute("slot", obj['1']);
                s5.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's6'){
                let s6 = document.getElementById('s6');
                s6.setAttribute("class", "openDialog btn btn-danger mt-2");
                s6.setAttribute("note", obj['2']);
                s6.setAttribute("slot", obj['1']);
                s6.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's7'){
                let s7 = document.getElementById('s7');
                s7.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s7.setAttribute("note", obj['2']);
                s7.setAttribute("slot", obj['1']);
                s7.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's8'){
                let s8 = document.getElementById('s8');
                s8.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s8.setAttribute("note", obj['2']);
                s8.setAttribute("slot", obj['1']);
                s8.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's9'){
                let s9 = document.getElementById('s9');
                s9.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s9.setAttribute("note", obj['2']);
                s9.setAttribute("slot", obj['1']);
                s9.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's10'){
                let s10 = document.getElementById('s10');
                s10.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s10.setAttribute("note", obj['2']);
                s10.setAttribute("slot", obj['1']);
                s10.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's11'){
                let s11 = document.getElementById('s11');
                s11.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s11.setAttribute("note", obj['2']);
                s11.setAttribute("slot", obj['1']);
                s11.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's12'){
                let s12 = document.getElementById('s12');
                s12.setAttribute("class", "openDialog btn btn-danger mt-2");
                s12.setAttribute("note", obj['2']);
                s12.setAttribute("slot", obj['1']);
                s12.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's13'){
                let s13 = document.getElementById('s13');
                s13.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s13.setAttribute("note", obj['2']);
                s13.setAttribute("slot", obj['1']);
                s13.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's14'){
                let s14 = document.getElementById('s14');
                s14.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s14.setAttribute("note", obj['2']);
                s14.setAttribute("slot", obj['1']);
                s14.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's15'){
                let s15 = document.getElementById('s15');
                s15.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s15.setAttribute("note", obj['2']);
                s15.setAttribute("slot", obj['1']);
                s15.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's16'){
                let s16 = document.getElementById('s16');
                s16.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s16.setAttribute("note", obj['2']);
                s16.setAttribute("slot", obj['1']);
                s16.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's17'){
                let s17 = document.getElementById('s17');
                s17.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s17.setAttribute("note", obj['2']);
                s17.setAttribute("slot", obj['1']);
                s17.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's18'){
                let s18 = document.getElementById('s18');
                s18.setAttribute("class", "openDialog btn btn-danger mt-2");
                s18.setAttribute("note", obj['2']);
                s18.setAttribute("slot", obj['1']);
                s18.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's19'){
                let s19 = document.getElementById('s19');
                s19.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s19.setAttribute("note", obj['2']);
                s19.setAttribute("slot", obj['1']);
                s19.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's20'){
                let s20 = document.getElementById('s20');
                s20.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s20.setAttribute("note", obj['2']);
                s20.setAttribute("slot", obj['1']);
                s20.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's21'){
                let s21 = document.getElementById('s21');
                s21.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s21.setAttribute("note", obj['2']);
                s21.setAttribute("slot", obj['1']);
                s21.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's21'){
                let s21 = document.getElementById('s21');
                s21.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s22.setAttribute("note", obj['2']);
                s22.setAttribute("slot", obj['1']);
                s22.setAttribute("bid", obj['0']);
              }
              else if(obj['1'] === 's23'){
                let s23 = document.getElementById('s23');
                s23.setAttribute("class", "openDialog btn btn-danger ml-2 mt-2");
                s23.setAttribute("note", obj['2']);
                s23.setAttribute("slot", obj['1']);
                s23.setAttribute("bid", obj['0']);
              }
            });
          },       
        });
      }
    }
  </script>

<body onload='changeSchedule()'>

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
        <input type='date' name='<?php echo $_SESSION["id"] ?>' value="<?php echo  date("Y-m-d"); ?>" id='sdate' onchange="changeSchedule(event);" class='form-control'/>
        <br />
        <table class='table table-bordered'>
          <tr>
            <td><input type='button' class='btn btn-dark' id='s0' name='s0' value='0-1' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2' id='s1' name='s1' value='1-2' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2' id='s2' name='s2'value='2-3' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2' id='s3' name='s3' value='3-4' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2' id='s4' name='s4' value='4-5' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2' id='s5' name='s5' value='5-6' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
          </tr>
          <tr class=''>
            <td><input type='button' class='btn btn-dark mt-2' id='s6' name='s6' value='6-7' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s7' name='s7' value='7-8' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s8' name='s8' value='8-9' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s9' name='s9' value='9-10' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s10' name='s10' value='10-11' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s11' name='s11' value='11-12' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
          </tr>
          <tr>
            <td><input type='button' class='btn btn-dark mt-2' id='s12' name='s12' value='12-13' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s13' name='s13' value='13-14' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s14' name='s14' value='14-15' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s15' name='s15' value='15-16' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s16' name='s16' value='16-17' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s17' name='s17' value='17-18' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
          </tr>
          <tr>
            <td><input type='button' class='btn btn-dark mt-2' id='s18' name='s18' value='18-19' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s19' name='s19' value='19-20' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s20' name='s20' value='20-21' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s21' name='s21' value='21-22' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s22' name='s22' value='22-23' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
            <td><input type='button' class='btn btn-dark ml-2 mt-2' id='s23' name='s23' value='23-24' onclick="showModel(this.id);" data-toggle="modal" data-target="#myModal" /></td>
          </tr>

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
  

	<div class="grid_sec">
		<img src="images/grid.png">
	</div>

</header>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Note</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form  method="GET" action="#">
              <div class="form-group">
                <input type="number" name="aid" id="aid" class="form-control" hidden>
              </div>
              <div class="form-group">
                <input type="text" name="aslot" id="aslot" class="form-control" hidden>
              </div>
              <div class="form-group">
                <label id="">Note</label>
                <input type="text" name="anote" id="anote" class="form-control">
              </div>

            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="submitData()">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>