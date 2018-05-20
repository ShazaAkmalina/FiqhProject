<?php

$conn = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

mysqli_select_db($conn, "musykil") or die ( "Could not open products database" );

?>