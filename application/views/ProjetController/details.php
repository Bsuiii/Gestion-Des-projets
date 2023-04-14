<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
    .heading {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.table-info, .table-tasks {
    border-collapse: collapse;
    width: 100%;
}

.table-info th, .table-info td, .table-tasks th, .table-tasks td {
    padding: 8px;
    text-align: left;
}

.table-info th {
    background-color: #f2f2f2;
    color: #333;
}

.table-tasks th {
    background-color: #333;
    color: #fff;
}

.table-tasks tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>
</head>
<body>
<?php 
echo '<h1>Information générales : </h1>';
echo '<table class="table-info"> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
     <tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td><tr>
     <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
     <tr><th>Description</th><td>'.$this->details['Description'].'</td><tr>
     </table>';

if(sizeof($this->details['tasks'])){
    echo '<h1 class="heading">Liste des tâches : </h1>';
    echo '<table class="table-tasks"><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th></tr>';
    $i=1;
    foreach($this->details['tasks'] as $task){
        echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td></tr>';
    }
    echo'</table>';
}

?>
</body>
</html>