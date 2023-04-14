<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			background-color: #f5f5f5;
		}
		h1 {
			font-size: 24px;
			color: #333;
			margin-top: 30px;
			margin-bottom: 10px;
		}
		table {
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		table th, table td {
			padding: 10px;
			border: 1px solid #ccc;
		}
		table th {
			background-color: #eee;
		}
		img {
			display: block;
			margin: auto;
			max-width: 100%;
			height: auto;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<?php 
		echo '<h1>Information générales : </h1>';
		echo '<table> 
				<tr><th>Titre</th><td>'.$this->details['Titre'].'</td></tr>
				<tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td></tr>
				<tr><th>Fin</th><td>'.$this->details['DateFin'].'</td></tr>
				<tr><th>Dscription</th><td>'.$this->details['Description'].'</td></tr>
			</table>';
		if(sizeof($this->details['tasks'])){
			echo '<h1>Liste des tâches : </h1>';
			echo '<table><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th></tr>';
			$i=1;
			foreach($this->details['tasks'] as $task){
				echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td></tr>';
			}
			echo'</table>';
		}
		$image='application/views/gantt/projet'.$this->details['Id'].'.jpg';
	?>
	<img src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('application/views/gantt/projet'.$this->details['Id'].'.jpg')); ?>" alt="Gantt chart">
</body>
</html>
