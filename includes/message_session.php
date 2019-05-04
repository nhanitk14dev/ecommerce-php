<?php
if (isset($_SESSION['error'])) {
	echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>
";
	unset($_SESSION['error']);
}
?>