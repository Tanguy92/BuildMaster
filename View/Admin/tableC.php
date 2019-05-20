<p>
    <label><h1><font color="white">Clients</font></h1></label>
    <table>
		<tr id="ligne">
			<th>Prenom</th>
			<th>Nom</th>
            <th>Mail</th>
            <th>Adresse</th>
            <th>Signalements</th>
            <th> </th>
		</tr>
<?php 
    for($i = 0; $i < count($c)-1;$i++){
?>
    
	    <tr>
			<td id="col"><h3><font color="white"><?php echo $c[$i]['prenom']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['nom']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['mail']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['adresse']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['signalements']; ?></font></h3></td>
            <td id ="col">
                <form action="index.php" method="GET">
                    <input type="hidden" name="page" value="supCompte">
                    <?php echo '<input type="hidden" name="profil" value="' . $c[$i]['idMembre'] . '">'; ?>
		            <input id="conversation" type="submit" value="Supprimer">
                </form>
            </td>
		</tr>	
<?php
}
?>
	</table>
</p>

</center></body>
</html>