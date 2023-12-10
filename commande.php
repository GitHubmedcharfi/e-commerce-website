<?php
session_start();
$montantTotal = $_SESSION['total_price'] ?? 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Validation de Commande</title>
 <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  width: 80%;
  margin: 20px auto;
  text-align: center;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

h1 {
  color: #333;
}

label {
  display: block;
  margin-bottom: 5px;
  text-align: left;
  color: #333;
}

input, select, button {
  margin-bottom: 15px;
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button {
  background-color: #4caf50;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #45a049;
}

.messageValidation {
  background-color: #dff0d8;
  border: 1px solid #b2dba1;
  color: #3c763d;
  padding: 15px;
  margin-top: 20px;
  border-radius: 5px;
  text-align: center;
}

</style>
</head>
<body>
  <div class="container">
    <h1>Validation de Commande</h1>
    <form action="valide.php" method="POST">
      <label for="adresse">Adresse :</label>
      <input type="text" name="adresse" id="adresse" required><br><br>

      <label for="typePaiement">Type de paiement :</label>
      <select id="typePaiement"  name="typePaiement"required>
        <option value="cache">Paiement en espèces</option>
        <option value="carte">Paiement par carte bancaire</option>
      </select><br><br>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="tel">Numéro de téléphone :</label>
      <input type="tel" id="tel"  name="tel" required><br><br>

      <label for="montantTotal">Montant total :</label>
<input type="text" id="montantTotal" name="montantTotal" value="<?= $montantTotal ?>" readonly><br><br>

      <input type="submit" value="valider ma commande " class="mon-bouton">
    </form>
 
  </div>
  <script>

</script>
</body>
</html>
