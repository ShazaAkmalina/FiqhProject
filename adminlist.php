<!DOCTYPE html>
<html>
<title>listQuestion</title>
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

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
	margin : center;
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
	margin: left;
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
  position: left; 
  left: 50%; 
  width: 800px;
  margin-left: -400px;
}
h2{
text-align: center;
}
table,th,td{
text-align: left;
width: 500 px;
height: 100 px;
}


</style>
</head>
<body>
<div class="page-wrap">
<div class="navbar">
  <a href="adminpage.php">e-musykil</a>
  <a href="adminlist.php">Lihat / Jawab Soalan</a>
  <a href="home.php">Log Keluar</a>
</div>

<div class="main">
<h2>Senarai Soalan</h2>
<?php
include("dbase.php");

$query = "SELECT * FROM list";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
	$id = $row["id"];
	$scholar = $row['scholar'];
	$question = $row["question"];
	$answer = $row['answer'];
?>
<form action="/action_page.php">
  
  <div class="container">
    <table>
    <tr> 
    <th>Ilmuan: <?php echo $scholar; ?></th>
    <td>
    </td>
    </tr>
	<tr> 
    <th>Soalan: <?php echo $question; ?></th>
    <td>
    </td>
    </tr>
    <tr>
    <th>Jawapan: <?php echo $answer; ?></th>
    <td>
    </td>
    </tr>
	<tr>
    <th><a href="adminanswerquestion.php?id=<?php echo $id; ?>">Ubah</a>
	/ <a href="admindelete.php?id=<?php echo $id; ?>">Padam</a></th>
    <td>
    </td>
    </tr>
    </table>
	<hr>
   </div>

  <?php 
}
	?>
</form>
</div>
</div>
</body>
</html>
