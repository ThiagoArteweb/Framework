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