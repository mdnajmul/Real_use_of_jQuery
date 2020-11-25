<?php
    
	$fonts = "arial";
	$bgcolor= "#FF6347";
	$fontcolor = "#f1f1f1";

?>

<!DOCTYPE html>
<html>
	<head>
	    <title>jQuery</title>
		<style>
		 body{font-family:<?php echo $fonts; ?>;}
		.phpcoding{width:900px; margin: 0 auto; background:#ddd;}
		.headeroption, .footeroption{background:<?php echo $bgcolor; ?>; color:<?php echo $fontcolor; ?>; text-align:center; padding:20px;}
		.headeroption h2, .footeroption h2{margin:0; font-size:24px;}
		.maincontent{min-height:400px; padding:20px; font-size:18px;}
		 p{margin:0}
		input[type="text"],input[type="password"]{width:238px; padding:5px;}
		select{font-size:18px; padding:2px 5px; width:250px;}
		.tblone{width:100%; border:1px solid #fff; margin:20px 0;text-align: left;}
		.tblone td{padding:5px 10px; text-align:center;}
		table.tblone tr:nth-child(2n+1){background:#fff; height:30px;}
		table.tblone tr:nth-child(2n){background:#f1f1f1; height:30px;}
		#myform{width:100%; border:1px solid #fff; padding:10px;}
        .myuniversity{width: 815px; min-height: 300px; background: #fff; border: 1px solid #999; padding: 15px; margin-top: 10px;}
        .error_form{color: red; font-size: 15px;}
        
         
		</style>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
        <div class="phpcoding">
			<section class="headeroption">
			        <h2><?php echo "Real use of jQuery: Form Validation"; ?></h2>
			</section>
			
			<section class="maincontent">