<?php

$action = isset($_GET['action'])?$_GET['action']:null;

switch ($action) {
	case 'create':

		require("view/header.php");
		require("view/create.php");
		require("view/footer.php");

		/*
			1. Formulier tonen.
			2. Formulier gegevens in database zetten.
		*/
		break;

	case 'read':

		require("view/header.php");
		require("view/read.php");
		require("view/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven.
		*/
		break;

	case 'update':

		require("view/header.php");
		require("view/update.php");
		require("view/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven in een formulier.
			3. (Gewijzigde) gegevens in de database plaatsen.
		*/
		break;

	case 'delete':

		require("view/header.php");
		require("view/delete.php");
		require("view/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit database weergeven met bevestigingsvraag.
			3. Gegevens uit de database verwijderen. 
		*/
		break;
	
	default:

		require("view/header.php");
		require("view/default.php");
		require("view/footer.php");

		break;
}


?>