<div class="suporteAdmTopFaixa">
    <?php
        $verificador=new \App\Controller\ControllerSuporte;
        $vUrl=new \App\Init();
    ?>

    <?php if ($verificador->dbVerificarStatus()) { ?>
        <a href="<?php echo DIRPAGINAS . "suporte/dbMudarStatus/offline"; ?>" title='Colocar Offline'><img src="<?php echo DIRIMAGES."suporte-offline.png"; ?>" alt='Ficar Offline' title='Ficar Offline'></a>
    <?php } else { ?>
        <a href="<?php echo DIRPAGINAS . "suporte/dbMudarStatus/online"; ?>" title='Colocar Online'><img src="<?php echo DIRIMAGES."suporte-online.png"; ?>" alt='Ficar Online' title='Ficar Online'></a>
    <?php } ?>

    <a href="<?php echo DIRPAGINAS . 'suporte/dbDeletarMensagens'; ?>" title="Deletar todas as mensagens"><img src="<?php echo DIRIMAGES . 'suporte-lixeira.png'; ?>" alt="Limpar todas as mensagens" title="Limpar todas as mensagens"></a>
</div>




<?php if(isset($vUrl->getUrlArray()[2])){ ?>
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
                <input type="hidden" name="nick" id="nick" value="Suporte">
                <input type="hidden" name="ip" id="ip" value="<?php echo $vUrl->getUrlArray()[2]; ?>">
                <textarea name="mensagem" id="mensagem" required></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
<?php } ?>