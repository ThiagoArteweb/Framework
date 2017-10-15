<!DOCTYPE html>
<html lang="pt-BR">





<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webdesign em foco">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo DIRIMAGES.'favicon/apple-icon-57x57.png'; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo DIRIMAGES.'favicon/apple-icon-60x60.png'; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo DIRIMAGES.'favicon'; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DIRIMAGES.'favicon/apple-icon-76x76.png'; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo DIRIMAGES.'favicon/apple-icon-114x114.png'; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo DIRIMAGES.'favicon/apple-icon-120x120.png'; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo DIRIMAGES.'favicon/apple-icon-144x144.png'; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo DIRIMAGES.'favicon/apple-icon-152x152.png'; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIRIMAGES.'favicon/apple-icon-180x180.png'; ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo DIRIMAGES.'favicon/android-icon-192x192.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo DIRIMAGES.'favicon/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DIRIMAGES.'favicon/favicon-96x96.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo DIRIMAGES.'favicon/favicon-16x16.png'; ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo DIRIMAGES.'favicon/ms-icon-144x144.png'; ?>">
    <meta name="theme-color" content="#ffffff">
    <title><?php $this->title(); ?></title>
    <meta name="description" content="<?php $this->description(); ?>">
    <meta name="keywords" content="<?php $this->keywords(); ?>">
    <style type='text/css'><?php echo file_get_contents(DIRCSS.'style.min.css'); ?></style>

    <?php echo $this->addHead(); ?>
</head>






<body>

    <header>
        <div class="botaoMobile">
            <div class="botaoMobileImages">
                <img src="<?php echo DIRIMAGES.'botao.png';?>" alt="Botão" title="Botão">
                <img class="displayNone" src="<?php echo DIRIMAGES.'botao-fechar.png';?>" alt="Botão Fechar" title="Botão Fechar">
            </div>
        </div>


        <?php
        $objSuporte=new \App\Controller\ControllerSuporte();
        if($objSuporte->dbVerificarStatus()){
            ?>
            <div class="suporte">
                <div class="suporteTitulo"><img src="<?php echo DIRIMAGES."suporteIcon.png"; ?>" alt="Suporte Online" title="Suporte Online"> Suporte Online</div>


                <div class="suporteMensagem">
                    <div class="suporteMensagemConversa"></div>

                    <div class="suporteMensagemInicial" id="suporteSup">
                        <strong>Suporte:</strong><br>
                        Em que posso ajudá-lo?
                    </div>
                </div>


                <div class="suporteFormulario">
                    <form name="formSuporte" id=formSuporte method="post" action="<?php echo DIRPAGINAS."suporte"; ?>">
                        <input type="hidden" name="nick" id="nick" value="Usuário">
                        <input type="hidden" name="ip" id="ip" value="<?php echo str_replace('.','_',$_SERVER['REMOTE_ADDR']); ?>">
                        <textarea name="mensagem" id="mensagem" required></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        <?php }else{ ?>
            <div class="suporte">
                <img src="<?php echo DIRIMAGES."suporte-whatsapp.png"; ?>" alt="WhatsApp" title="WhatsApp">
            </div>
        <?php } ?>

        <?php echo $this->addHeader(); ?>
    </header>












<main>
    <?php echo $this->addMain(); ?>
</main>













<footer>
    <?php echo $this->addFooter(); ?>
    <script><?php echo file_get_contents(DIRJS.'jQuery.js'); #Versão 3.2.1 ?></script>
    <script><?php echo file_get_contents(DIRJS.'javascript.min.js'); ?></script>
</footer>

</body>





</html>

