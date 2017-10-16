<?php
    $verificador=new \App\Controller\ControllerSuporte;
    $vUrl=new \App\Init();

    if(!isset($vUrl->getUrlArray()[2])) {
?>
    <meta http-equiv="refresh" content="12" />
<?php } ?>