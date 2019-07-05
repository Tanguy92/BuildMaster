
			
      
		        <tr>
			        <td id="col"><h2><font color="black"><?php echo $adv[$i]['text']; ?></font><h2></td>
			        <td id ="col">
                        <form action="index.php" method="GET">
                            <input type="hidden" name="page" value="supSign">
                            <input type="hidden" name="profil" value="<?php echo $sup; ?>">
                            <input type="hidden" name="id" value="<?php echo $pu;  ?>">
		                    <input id="conversation" type="submit" value="Supprimer">
                        </form>
                    </td>
		        </tr>	
           
