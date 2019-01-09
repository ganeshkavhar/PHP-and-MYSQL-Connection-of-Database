<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PHP GURUKUL | How to Fetch Data from MySql Database Using PHP</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="http://www.phpgurukul.com/">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.phpgurukul.com/all-demos/">All Demos</a></li>
			<li><a href="http://www.phpgurukul.com/category/php-projects/">Free Projects</a></li>
			<li><a href="http://www.phpgurukul.com/contact-us/">Contact</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.phpgurukul.com/category/php/">PHP </a></li>
                <li><a href="http://www.phpgurukul.com/category/php-oops-concepts/">PHP OOPs</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/php-data-object/">PDO</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/inteview-ques-ans/">Interview QA</a></li>
              </ul>
            </li>
		</ul>
		
	</div>
</nav>

<div class="container-fluid">

  <div class="col-sm-8">
    <div class="row">
      <div class="col-xs-12">
        <h3>How to Insert Data into MySql Using PHP(mysql_fetch_array) </h3>
		<hr >
     <table width="100%"  border="1">
      <tr> 
      <th>Sr no.</th>
      <th>Name</th>
        <th>Email</th>
          <th>Contact no.</th>
            <th>Gender</th>
              <th>Education</th>
                <th>Address</th></tr>

<?php
 $query=mysqli_query($con,"select * from data");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contactno'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['education'];?></td>
<td><?php echo $row['address'];?></td>
 </tr>  
 <?php 
$cnt=$cnt+1;
 } ?>             
</table>

<h3>How to Insert Data into MySql Using PHP(mysql_fetch_row) </h3>
		<hr >
     <table width="100%"  border="1">
      <tr> 
      <th>Sr no.</th>
      <th>Name</th>
        <th>Email</th>
          <th>Contact no.</th>
            <th>Gender</th>
              <th>Education</th>
                <th>Address</th></tr>

<?php
$query=mysqli_query($con,"select * from data");
$cnt=1;
while($row=mysqli_fetch_row($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['1'];?></td>
<td><?php echo $row['2'];?></td>
<td><?php echo $row['3'];?></td>
<td><?php echo $row['4'];?></td>
<td><?php echo $row['5'];?></td>
<td><?php echo $row['6'];?></td>
 </tr>  
 <?php 
$cnt=$cnt+1;
 } ?>             
</table>


<h3>How to Insert Data into MySql Using PHP(mysql_fetch_assoc) </h3>
		<hr >
     <table width="100%"  border="1">
      <tr> 
      <th>Sr no.</th>
      <th>Name</th>
        <th>Email</th>
          <th>Contact no.</th>
            <th>Gender</th>
              <th>Education</th>
                <th>Address</th></tr>

<?php
$query=mysqli_query($con,"select * from data");
$cnt=1;
while($row=mysqli_fetch_assoc($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contactno'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['education'];?></td>
<td><?php echo $row['address'];?></td>
 </tr>   
 <?php 
$cnt=$cnt+1;
 } ?>             
</table>

<h3>How to Insert Data into MySql Using PHP(mysql_fetch_object) </h3>
		<hr >
     <table width="100%"  border="1">
      <tr> 
      <th>Sr no.</th>
      <th>Name</th>
        <th>Email</th>
          <th>Contact no.</th>
            <th>Gender</th>
              <th>Education</th>
                <th>Address</th></tr>

<?php
$query=mysqli_query($con,"select * from data");
$cnt=1;
while($row=mysqli_fetch_object($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->contactno;?></td>
<td><?php echo $row->gender;?></td>
<td><?php echo $row->education;?></td>
<td><?php echo $row->address;?></td>
 </tr>   
 <?php 
$cnt=$cnt+1;
 } ?>             
</table>



      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->

   <div class="col-sm-10"></div>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>