<!DOCTYPE html>
<html>
<title>Home</title>
<head>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
#page-wrap { 
  position: absolute; 
  left: 50%; 
  width: 800px;
  margin-left: -400px;
}
.back1 {
	padding: 25px;
	background-color: #FFD700;
	background-repeat: no-repeat;
	background-size: auto;
}

.back2 {
	padding: 25px;
	background-color: #F8F8FF;
	background-repeat: no-repeat;
	background-size: auto;
}
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
	
}
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  }
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<link rel="stylesheet" type="text/css" href="styleImg.css">
</head>
<body>

<div class="page-wrap">

<div class="navbar">
  <a href="managehome.php">e-Musykil</a>
  <a href="adminregister.php">Tambah Ilmuan</a>
  <a href="home.php">Log Keluar</a>
</div>


<div class="main">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="kfiqh.portal.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="banner.fiqh.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="banner.sbm2017.png" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides fade");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="back2">
<h3>Hadis pilihan hari ini</h3>
<table>
<?php 
include('dbase.php');

$query = "SELECT * FROM basic";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
$id = $row['id'];
	$hadis = $row['hadis'];
	$intro = $row['intro'];
	

?>
<tr> 
    <th><?php echo $hadis ?></th>
	<a href="edithadis.php?id=<?php echo $id; ?>">Ubah</a>
    
<td>
	<div style="text-align:center;padding:1em 0;float:right;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1735161">
	<span style="color:gray;">Current local time in</span>
	<br />Kuala Lumpur, Malaysia</a></h4> 
	<iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Asia%2FKuala_Lumpur" width="90%" height="80" frameborder="0" seamless></iframe> </div>
</td>
</tr>
</table>
</div>
<br><br>

<div class="back1">
<h3>Pengenalan</h3>
<p><?php echo $intro; ?></p>
<a href="editintro.php?id=<?php echo $id; ?>">Ubah</a>
</div>
<?php
}
?>
<br><br>
<div class="back2">
<h4>Senarai ilmuan UMP</h4>
<br><br>

<?php 
include('dbase.php');

$query = "SELECT * FROM admin";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
	$username = $row['username'];
	$name = $row['name'];
	$position = $row['position'];
	

?>
<div class="container">
<b><?php echo $name; ?></b><br>
<?php echo $position; ?>
<br>
	<a href="deletescholar.php?username=<?php echo $username; ?>">Padam</a>
<hr><br>
</div>
<?php
}
?> 
</div>
</div>
</div>
<div class="footer">
  <p>&copy; 2017 e-Musykil UMP <p>
</div>
</body>
</html>
