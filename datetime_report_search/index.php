<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>.::AnandasoftBD::.</title> 
<!-- Daterange picker -->
  <link rel="stylesheet" href="daterangepicker.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
</head>
<body> 
<form action="" method="POST"> 
<input  id="daterange-btn" name="daterange">	   
<input type="submit" name="save" >	   
</form>	
<?php
if(isset($_POST['save'])){
	$slice=explode("-",$_POST['daterange']);
	echo $from=date('Y-m-d',strtotime($slice[0]));
	echo $to=date('Y-m-d',strtotime($slice[1]));
	//print_r($_POST);
	//print_r($slice);
	
	
}

?>	
</body>

<!-- daterangepicker -->
<script src="moment.min.js"></script>
<script src="daterangepicker.js"></script>
<script>
  $(function () {
    //alert();
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days').format('MM-DD-YYYY')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      },
      function (start, end) {
        $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
      }
    )

    
  });
  </script>
</html>
