<?php

$action = isset($_GET['action'])?$_GET['action']:null;

switch ($action) {
	case 'create':
		/*
			1. Formulier tonen.
			2. Formulier gegevens in database zetten.
		*/
		break;

	case 'read':
		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven.
		*/
		break;

	case 'update':
		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit de database weergeven in een formulier.
			3. (Gewijzigde) gegevens in de database plaatsen.
		*/
		break;

	case 'delete':
		/*
			1. Gegevens uit de database lezen (Nodig: ID).
			2. Gegevens uit database weergeven met bevestigingsvraag.
			3. Gegevens uit de database verwijderen. 
		*/
		break;
	
	default:
		/*

		*/
		break;
}


?>