
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Log Masuk</title>
<head>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
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

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
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
#page-wrap { 
  position: absolute; 
  left: 50%; 
  width: 800px;
  margin-left: -400px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

</style>
</head>
<body>
<?php
$error ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
   if(!empty($_POST['txtname']))    
   {
      if(!empty($_POST['psw']))
	  {
            // to make a connection with database
	        $conn = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	        // to select the targeted database
	        mysqli_select_db($conn,"musykil") or die(mysqli_connect_error());
			
	        // to create a query to be executed in sql
	        $name = $_POST['txtname'];
	        $pw = $_POST['psw'];
	        $query = "SELECT * FROM adminlogin WHERE username = '$name' AND password = '$pw'";

	        // to run sql query in database
	        $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
	     
		    //Check whether the query was successful or not
	        if(isset($result)) 
			{
		        if(mysqli_num_rows($result) == 1) 
				{
			        //Login Successful
			        $_SESSION['uname'] = $_POST['txtname'];
                    header('Location:managehome.php');
					exit();
		        }
		        else 
				{
			        //Login failed
			        $error ="Invalid UserName or Password!";
			    }
	        }
	        else 
		    {
		        die("Query failed");
	        }
	  }
	  else
	  {
	       $error ="Please input Password!";
	  }
   }
   else
      $error ="Please input username!";
}
?>

<div class="page-wrap">
<div class="navbar">
  <a href="home.php">e-musykil</a>
  <a href="userlist.php">Lihat Soalan</a>
  <a href="useraskquestion.php">Tanya Soalan</a>
  <a href="login1.php">Log Masuk</a>
</div>
<div class="main">
<div class="top"></div>

<h2>Sila Log Masuk</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log Masuk</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="adminlogin.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
    <label><b>ID Pengguna</b></label>
    <input type="text" placeholder="Masukkan ID" name="txtname" required>

    <label><b>Kata Laluan</b></label>
    <input type="password" placeholder="Masukkan Kata laluan" name="psw" required>    
      <button type="submit">Log Masuk</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Batal</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
