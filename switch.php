<?php

$action = isset($_GET['action'])?$_GET['action']:null;

switch ($action) {
	case 'create':
		
		if (!isset($_POST['submit'])) {
			//formulier create tonen
		} else {

		}

		break;

	case 'read':
		echo "We zitten nu in read!";
		break;

	case 'update':
		echo "We zitten nu in update!";
		break;

	case 'delete':
		echo "We zitten nu in delete!";
		break;
	
	default:
		echo "We zitten nu in default!";
		echo "<a href=\"switch.php?action=read\">Linkje!</a>";
		break;
}