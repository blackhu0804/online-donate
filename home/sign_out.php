<?php
	session_start();
	unset($_SESSION['home_username']);
	unset($_SESSION['home_userid']);
	session_destroy();
	echo "<script>location='index.php'</script>";

?>