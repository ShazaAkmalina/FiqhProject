<!DOCTYPE html>
<html>
<title>AskQuestion</title>
<head>
<style>
form {
    border: 3px dotted black;
}

input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    margin-left: auto;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


img.avatar {
	margin : center;
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

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
h2{
text-align: center;
}
th,td{
text-align: left;
width: 500 px;
height: 100 px;
}

</style>
</head>
<body>
<div class="page-wrap">
<div class="navbar">
  <a href="home.php">e-Musykil</a>
  <a href="userlist.php">Lihat Soalan</a>
  <a href="useraskquestion.php">Tanya Soalan</a>
  <a href="login1.php">Log Masuk</a>
</div>

<div class="main">

<h2>Tanya Soalan</h2>

<form action="userinsertquestion.php" method="post">
 
  <div class="container">
    <table>
    <th>KATEGORI:</th>
    <td>
    <input type="radio" name="kategori" value="PELAJAR">PELAJAR
    <input type="radio" name="kategori" value="KAKITANGAN">KAKITANGAN
    <input type="radio" name="kategori" value="AWAM">AWAM
	</td>
    <tr>
    <th>ILMUAN:</th>
    <td><select name="ilmuan">
    <option value="sila pilih">SILA PILIH</option>
	<?php 
	include('dbase.php');
	$query = "SELECT name FROM admin";
	$result = mysqli_query($conn, $query) or die("Could not execute query");
	$row = mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)){
		echo "<option value='". $row['name'] ."'>" . $row['name'] ."</option>";
	}
	
	?>
    </select></td>
    </tr>
    <tr>
    <th>SOALAN:</th>
    <td><textarea name="comment" rows="5" cols="40"></textarea>
    <td>
    </tr>
	<tr>
	<th></th>
	<td><button class="button" onclick="myFunction()">Hantar</button>
	<script>
		function myFunction() {
			alert("Soalan telah dihantar.");
	}
	</script></td>
    </tr>
	</table>
   </div>

  
</form>
</div>
</div>
</body>
</html>
