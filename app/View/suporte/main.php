<?php
    $verificador=new \App\Controller\ControllerSuporte;
    $vUrl=new \App\Init();
?>

<?php
    if(!isset($vUrl->getUrlArray()[2])) {
        if ($verificador->dbVerificarUsuarioOnline()) {  ?>
            <div class='article'>
                <audio class="visibilityHidden" controls autoplay='autoplay'>
                    <source src="<?php echo DIRAUDIO."SuporteOgg.ogg"; ?>" type="audio/ogg">
                    <source src="<?php echo DIRAUDIO."SuporteMp3.mp3"; ?>" type="audio/mpeg">
                </audio>
            </div>
    <?php
        }
        $verificador->dbListarUsuariosOnline();
    }
?>

