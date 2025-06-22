<?php 

// Register action
if (isset($_POST['register'])) {
	echo "You are registered successfully dear". $_POST['name'];
}

else if (isset($_POST["login"])) {
	echo "Welcome";
}