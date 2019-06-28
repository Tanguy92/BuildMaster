
            <?php
            if ($message[$i]['expediteur'] == $moi AND $message[$i]['destinataire'] == $toi OR $message[$i]['expediteur'] == $toi AND $message[$i]['destinataire'] == $moi) {
                    if ($message[$i]['expediteur'] == $moi AND $message[$i]['destinataire'] == $toi) {
                        echo '<li class="me">';
                    } elseif ($message[$i]['destinataire'] == $moi AND $message[$i]['expediteur'] == $toi) {
                        echo '<li class="you">';
                    } 
                ?>
                
                    <div class="triangle"></div>
                    <div class="message">
                <?php echo $message[$i]['text']; ?>
                    </div>
                </li>
            <?php } ?>
