<?php

$action = isset($_GET['action'])?$_GET['action']:null;

switch ($action) {
	case 'create':
		echo "We zitten nu in create!";
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
		break;
}