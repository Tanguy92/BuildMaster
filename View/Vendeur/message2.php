
			
			<?php 
				echo '<li>';
				echo '<img src="' . $photo . '" alt="">';
				echo '<form action="index.php" method="GET">';
				echo '<div><h2><input type="submit" value="' . $prenom . '"></h2>';
				echo '<h3>' . $statut . '</h3>';
				?>
			<input type="hidden" name="page" value="conversation">
			<?php echo '<input type="hidden" name="destinataire" value="' . $donnees[$i]['idMembre'] . '">'; ?>
			</form>
			</div>
			</li>

	