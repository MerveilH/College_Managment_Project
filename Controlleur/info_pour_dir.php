<?php
include('../Modele/Filiere.php');

$table = func1liste();

if(count($table) > 0){
echo '
        <table class="table_inf">
            <tr class="table_line">
                <th class="table_col">Nom</td>
                <th class="table_col">Nombre d\'etudiants</td>
                <th class="table_col">Responsable</td>
            </tr>';
foreach($table as $obj)
{
    echo '
            <tr class="table_line">
                <td class="table_col">'.$obj->getNom().'</td>
                <td class="table_col">'.$obj->getNbr().'</td>
                <td class="table_col">'.$obj->getResp().'</td>
            </tr>';
}
echo '
	</table>';
}
?>
