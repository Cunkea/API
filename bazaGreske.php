<?php
switch ($e->getCode()){
	case 2002:
		echo 'Baza je nedostupna';
		break;
	case 1049:
		echo 'Baza ' . $baza . ' ne postoji';
		break;
	case 1045:
		echo 'Korisnik ' . $user . ' nema ovlasti (provjerite korisničko ime i lozinku na bazi)';
		break;
	default:
		echo 'Poteškoće rada u sustavu, detalji: ' . $e->getCode() . ", " . $e->getMessage();
}