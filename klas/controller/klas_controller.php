<?php

$action = isset($_GET['action'])?$_GET['action']:null;

switch ($action) {
	case 'create':

		require("view/_template/header.php");
		require("view/klas/create.php");
		require("view/_template/footer.php");

		/*
			1. Formulier tonen.
			2. Formulier gegevens in database zetten.
		*/
		break;

	case 'read':

		require("view/_template/header.php");
		require("view/klas/read.php");
		require("view/_template/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven.
		*/
		break;

	case 'update':

		require("view/_template/header.php");
		require("view/klas/update.php");
		require("view/_template/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven in een formulier.
			3. (Gewijzigde) gegevens in de database plaatsen.
		*/
		break;

	case 'delete':

		require("view/_template/header.php");
		require("view/klas/delete.php");
		require("view/_template/footer.php");

		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit database weergeven met bevestigingsvraag.
			3. Gegevens uit de database verwijderen. 
		*/
		break;
	
	default:

		require("view/_template/header.php");
		require("view/klas/default.php");
		require("view/_template/footer.php");

		break;
}


?>