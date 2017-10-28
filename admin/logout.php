<?php
	session_start();
	unset($_SESSION['admin_userid']);
	session_destroy();
	echo "<script>location='login.php'</script>";

?>