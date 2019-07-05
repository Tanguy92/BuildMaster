<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="View/Css/utilisateurs.css"/>
	<title>Accueil</title>
</head>

<body><center>
<p>
    <label><h1><font color="white">Vendeurs</font></h1></label>
 
    <table class="flat-table flat-table-1">
        <thead>
			<th><h2>Prenom</h2></th>
			<th><h2>Nom</h2></th>
			<th><h2>Magasin</h2></th>
            <th><h2>Mail</h2></th>
            <th><h2>Adresse</h2></th>
            <th><h2>Signalements</h2></th>
            <th> </th>
        </thead>
        <tbody>
<?php 
    for($i = 0; $i < count($v)-1;$i++){
?>
    
	    <tr>
			<td id="col"><h3><font color="white"><?php echo $v[$i]['prenom']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $v[$i]['nom']; ?></font></h3></td>
			<td id="col"><h3><font color="white"><?php echo $v[$i]['magasin']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $v[$i]['mail']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $v[$i]['adresse']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $v[$i]['signalements']; ?></font></h3></td>
            <td id ="col">
                <form action="index.php" method="GET">
                    <input type="hidden" name="page" value="supCompte">
                   <?php echo '<input type="hidden" name="profil" value="' . $v[$i]['idMembre'] . '">'; ?>
		            <input id="conversation" type="submit" value="Supprimer">
                </form>
            </td>
		</tr>	
<?php
}
?>
</tbody>
	</table>
</p>


