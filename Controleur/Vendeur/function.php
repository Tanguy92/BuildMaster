<?php 
function affiche($chemin)
{
    echo  '<style>
    .kv {
        color: #fff;
        min-height: 400px;
        padding: 50px 100px;
        background-image: url("',$chemin,'");
        background-size: cover;
    }
</style>';
}
?>
