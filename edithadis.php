<?php 
session_start(); 
if(!isset($_SESSION['uname']))
{
     header('Location:home.html');
}
?>
<?php 
include("dbase.php");

$id = $_GET["id"];

$query = "SELECT * FROM basic WHERE id = 'id'";
$result = mysqli_query($conn, $query) or die("Could not execute query in .php");
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

$hadis = $row["hadis"];

@mysqli_free_result($result);
?>

<!DOCTYPE html>
<html>
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
table,th,td{
text-align: right;
width: 500 px;
height: 100 px;
}


</style>
<body>
<div class="page-wrap">
<div class="navbar">
  <a href="managehome.php">E-musykil</a>
  <a href="adminregister.php">Tambah Ilmuan</a>
  <a href="home.php">Log Keluar</a>
</div>
<div class="main">
<h2>Kemaskini Hadis</h2>
<form action="updatehadis.php" method="post">
  
  <div class="container">
    <table>
    <tr>
    <th>Masukkan Hadis:</th>
    <td>
    <textarea name="hadis" rows="5" cols="40"></textarea>
    </td>
    </tr>
	<tr>
	<th></th>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<td><button class="button" onclick="myFunction()">Hantar</button></td>
	<script>
		function myFunction() {
			alert("Hadis telah dikemaskini.");
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
