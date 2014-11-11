<?php

$savefolder = 'upload';		// Directorul pt. fisiere
$max_size = 250;			// Marimea maxima, in KiloBytes, care este permisa

// Seteaza matricea cu tipurile de fisiere permise
$allowtype = array('xml');

/** Incarcarea fisierul pe server **/
$rezultat = '';
// Daca este primit din formular un fisier valid
if (isset ($_FILES['myfile'])) {
  // Verifica daca fisierul are tipul de extensie permis
  $type = end(explode(".", strtolower($_FILES['myfile']['name'])));
  if (in_array($type, $allowtype)) {
    // Verifica daca fisierul are marimea permisa
	if ($_FILES['myfile']['size']<=$max_size*1000) {
      // Daca nu sunt erori in procesul de copiere
      if ($_FILES['myfile']['error'] == 0) {
	    // Seteaza locatia si numele pt. incarcare pe server
        $thefile = $savefolder . "/" . $_FILES['myfile']['name'];
        // Daca fisierul nu poate fi incarcat, returneaza mesaj
        if (!move_uploaded_file ($_FILES['myfile']['tmp_name'], $thefile)) {
          $rezultat = ' Fisierul nu a putut fi copiat, incercati din nou';
        }
        else {
          // Returneaza eticheta HTML cu fisierul.
		  $rezultat = '<p>"'.$thefile.'"</p>';
          echo 'XML-ul a fost incarcata cu succes';
        }
      }
    }
	else { $rezultat = 'Fisierul <b>'. $_FILES['myfile']['name']. '</b> depaseste marimea permisa de maxim <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat = 'Fisierul <b>'. $_FILES['myfile']['name']. '</b> nu are tipul de extensie permis'; }
}
// Codeaza cu 'urlencode()' variabila $rezultat si o returneaza in 'onload', itr-un tag BODY
$rezultat = urlencode($rezultat);
echo '<body onload="parent.doneloading(\''.$rezultat.'\')"></body>';
?>
