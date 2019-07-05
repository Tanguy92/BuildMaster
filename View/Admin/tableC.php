<p>
    <label><h1><font color="white">Clients</font></h1></label>
 
    <table class="flat-table flat-table-1">
        <thead>
        <th><h2>Prenom</h2></th>
			<th><h2>Nom</h2></th>
            <th><h2>Mail</h2></th>
            <th> </th>
        </thead>
        <tbody>
<?php 
    for($i = 0; $i < count($c)-1;$i++){
?>
    
	    <tr>
			<td id="col"><h3><font color="white"><?php echo $c[$i]['prenom']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['nom']; ?></font></h3></td>
            <td id="col"><h3><font color="white"><?php echo $c[$i]['mail']; ?></font></h3></td>
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
</tbody>
	</table>
</p>

</center></body>
</html>