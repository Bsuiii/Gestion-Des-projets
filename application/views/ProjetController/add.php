<html>
	<head>
		<style>
.heading {
  font-size: 45px;
  border: 1px solid black;
}

.container {
  padding: 20px;
  margin: 20px;
  border: 1px solid #ccc;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 100%;
}

button[type="submit"],
button[type="reset"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}

button[type="reset"] {
  background-color: #f44336;
}


		</style>
	</head>
	<body>
		<h1 style="font-size:45px; border:1px solid black;">Ajouter un projet</h1>
		<div class="container">
			<form action="../projetController/add" method="post" >
			<label> Titre </label>
			<input type="text" name="titre"><br>
			<label> Date Début </label>
			<input type="date" name="debut"><br>
			<label> Date Fin </label>
			<input type="date" name="fin"><br>
			<label> Description </label>
			<textarea name="description">
			</textarea><br>
			<button type="submit" >Envoyer</button>
			<button type="reset" >Effacer</button>
			</form>
	</div>
		
	</body>

</html>