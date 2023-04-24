function checkForm() {
  var nom = document.getElementById('nom').value;
  var prenom = document.getElementById('prenom').value;
  var email = document.getElementById('email').value;
  var num_nom_rue = document.getElementById('num_nom_rue_1').value;
  var Appartement = document.getElementById('Appartement_1').value;
  var Ville = document.getElementById('Ville_1').value;
  var Region = document.getElementById('Région_1').value;
  var Pays = document.getElementById('Pays_1').value;
  var CodePostal = document.getElementById('CodePostal_1').value;
  var Téléphone = document.getElementById('Téléphone_1').value;

  if (nom == '' || prenom == '' || email == '' || num_nom_rue == '' || Appartement == '' || Ville == '' || Region == '' || Pays == '' || CodePostal == '' || Téléphone == '') {
      alert('Champ manquant, Merci de vérifier');
      return false;
  }
}