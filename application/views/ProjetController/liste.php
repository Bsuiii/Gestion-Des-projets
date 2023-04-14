<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
   .project-wrapper {
        max-width: 800px;
        margin: auto;
    }

    .project-heading {
        text-align: center;
        margin-bottom: 20px;
    }

    .project-table {
        width: 100%;
        border-collapse: collapse;
        margin: auto;
        background-color: #f1f1f1;
    }

    .project-table th,
    .project-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .project-table th {
        background-color: #4CAF50;
        color: white;
    }

    .project-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .project-table tr:hover {
        background-color: #ddd;
    }

    .delete-btn,
    .planifier-btn,
    .details-btn,
    .gantt-btn {
        display: inline-block;
        padding: 6px 12px;
        margin: 5px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: #337ab7;
        border: 1px solid #2e6da4;
        border-radius: 4px;
    }

    .delete-btn:hover,
    .planifier-btn:hover,
    .details-btn:hover,
    .gantt-btn:hover {
        background-color: #286090;
        border: 1px solid #204d74;
    }
	</style>
</head>
<body>
    <div class="project-wrapper">
        <h1 class="project-heading">Liste des Projets</h1>
        <table class="project-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Titre</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Description</th>
                    <th colspan="4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach( $this->projets as $projet){
                    echo '<tr>
                            <td>'.$i++.'</td>
                            <td>'.$projet['Titre'].'</td>
                            <td>'.$projet['DatDebut'].'</td>
                            <td>'.$projet['DateFin'].'</td>
                            <td>'.$projet['Description'].'</td>
                            <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</a></td>
                            <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</a></td>
                            <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</a></td>
                            <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</a></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>