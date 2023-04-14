<html>
	<head>
	<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

h1 {
  color: #333;
  text-align: center;
}

form {
  width: 60%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
  margin-bottom: 15px;
}

button[type="submit"],
button[type="reset"] {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-right: 10px;
}

button[type="submit"]:hover,
button[type="reset"]:hover {
  background-color: #555;
}

		</style>
	</head>
	<body>
		<center><h1>Ajouter une Tache</h1></center>
		<form action="TaskController/add" method="post" >
		<input type="hidden" name="projetID" value=" <?php echo $this->projetId; ?>">
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date Début </label>
		<input type="text" name="debut"><br>
		<label> Date Fin </label>
		<input type="text" name="fin"><br>
		
		<button type="submit" >Envoyer</button>
		<button type="reset" >Effacer</button>
		</form>
	</body>

</html>