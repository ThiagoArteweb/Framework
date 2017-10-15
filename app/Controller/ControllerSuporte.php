<?php
namespace App\Controller;

use App\model\ModelSuporte;
use App\Render;

class ControllerSuporte extends ModelSuporte
{


    #Atributos
    private $id;
    private $ip;
    private $mensagem;
    private $data;
    private $nick;
    private $render;





    #Encapsulamentos
    protected function getId()
    {
        return $this->id;
    }

    public function setId($id = 0)
    {
        $this->id = $id;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    protected function getNick()
    {
        return $this->nick;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    protected function getMensagem()
    {
        return $this->mensagem;
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function getData()
    {
        date_default_timezone_set('Brazil/East');
        $this->data = date('Y/m/d H:i');
        return $this->data;
    }





    #Construtor
    public function __construct()
    {
        $this->render=new Render();

        if (isset($_POST['nick'])) {
            $this->setNick(filter_input(INPUT_POST, 'nick', FILTER_SANITIZE_STRING));
        } else {
            $this->setNick(null);
        }


        if (isset($_POST['ip'])) {
            $this->setIp(filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING));
        } else {
            $this->setIp(null);
        }


        if (isset($_POST['mensagem'])) {
            $this->setMensagem(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING));
        } else {
            $this->setMensagem(null);
        }
    }






    #Inicia o Chat
    public function iniciarChat()
    {
        if (!$this->dbTestaConexao($this->getIp())) {
            $this->dbInseriConexao($this->getIp());
        }
        $this->dbInseriMensagens($this->getIp(),$this->getNick(),$this->getMensagem(),$this->getData());
        $this->dbExibirMensagens($this->getIp());
    }





    #Listar Mensagens
    public function dbExibirMensagens($ip)
    {
        parent::dbExibirMensagens($ip);
    }






    #Deletar Mensagens
    public function dbDeletarMensagens()
    {
        parent::dbDeletarMensagens();
        $this->render->redirectUrl('suporte/administrador');

    }







    #Deletar Mensagens
    public function dbMudarStatus($status)
    {
        parent::dbMudarStatus($status);
        $this->render->redirectUrl('suporte/administrador');

    }







    #Verificar status do Suporte
    public function dbVerificarStatus()
    {
        return parent::dbVerificarStatus();
    }






    #Testar se tem usuário no chat agora
    public function dbVerificarUsuarioOnline()
    {
        return parent::dbVerificarUsuarioOnline();
    }





    #Listar usuários online
    public function dbListarUsuariosOnline()
    {
        parent::dbListarUsuariosOnline();
    }





    #Abrir página de administrador
    public function administrador()
    {
        $this->render->setTitle('Suporte Administrador');
        $this->render->setDescription('Realize o contato com nossa empresa através do suporte online');
        $this->render->setKeywords('suporte online, dúvidas online, atendimento online');
        $this->render->setDir('suporte/');
        $this->render->renderLayout(false);
    }

}