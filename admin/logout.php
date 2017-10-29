<?php
	session_start();
	unset($_SESSION['admin_userid']);
	unset($_SESSION['admin_username']);
	session_destroy();
	echo "<script>location='login.php'</script>";

?>