<?php
	if (!logged()) {
		Header("Location: login.php");
	}
?>