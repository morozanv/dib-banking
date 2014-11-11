/*** Script  ***/

// Functia care trimite datele din formular, fiind transferate la iframe
function uploadimg(theform){
  theform.submit();

  // Apeleaza functia pt. afisare Status loading
  setStatus("Loading...", "message_text");
  $("#flash").show();
  $("#flash").fadeIn(400).html('<img src="resourse/loading.gif" />');
  return false;
}

//Function care este executata dupa trimiterea datelor la iframe
// Este apelata din iframe. Prin onload-ul din eticheta <body> care apare in iframe dupa incarcarea imaginii pe server
function doneloading(rezultat) {
  // Decodeaza (urldecode) parametrul primit care e din PHP codat cu 'urlencode'
  rezultat = decodeURIComponent(rezultat.replace(/\+/g,  " "));

  //Adauga sirul primit din parametru in div-ul 'message_text' 
  document.getElementById('message_text').innerHTML = rezultat;
  $("#message_text").removeClass();
  $("#message_text").addClass("alert alert-danger");
  $("#flash").hide();
  
}

// Functia care afiseaza status-ul de loading
function setStatus(theStatus, theloc) {
  var tag = document.getElementById(theloc);

  // Daca in document se afla tag-ul cu id-ul din parametru
  if (tag) {
    // Adauga in ea sirul din 'theStatus' primit ca parametru
    tag.innerHTML = '<b>'+ theStatus + "</b>";
  }
}
