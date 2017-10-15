<?php
namespace App\Model;

class ModelSuporte extends ModelCrud
{


    #Atributos
    public $row;




    #Encapsulamentos
    public function getRow()
    {
        return $this->row;
    }

    public function setRow($row)
    {
        $this->row = $row;
    }






    #Testa se o usuário já está cadastrado
    public function dbTestaConexao($ip)
    {
        $bfCon = $this->select("*", "sup_conexao", "where conexao=?", array($ip));
        $this->setRow($bfCon->rowCount());

        if ($this->getRow()) {
            return true;
        } else {
            return false;
        }
    }





    #Testa se o usuário já está cadastrado
    public function dbVerificarUsuarioOnline()
    {
        $bfCon = $this->select("*", "sup_conexao", "", array());
        $this->setRow($bfCon->rowCount());

        if ($this->getRow()) {
            return true;
        } else {
            return false;
        }
    }







    #Inseri a conexão (caso o usuário não esteja cadastrado)
    public function dbInseriConexao($ip)
    {
        $this->insert("sup_conexao", "?,?", array(0, $ip));
    }







    #Inseri mensagens
    public function dbInseriMensagens($ip,$nick,$mensagem,$data)
    {
        $this->insert("sup_mensagem", "?,?,?,?,?", array("0", $ip, $nick, $mensagem, $data));
    }







    #Exibir mensagem do chat
    public function dbExibirMensagens($ip)
    {
        $bfMen = $this->select("*", "sup_mensagem", "where fk_conexao=? order by id desc", array($ip));
        while ($fMen = $bfMen->fetch(\PDO::FETCH_ASSOC)) {
            if ($fMen['nick'] == 'Usuário') {
                $id = 'suporteUsu';
            } else {
                $id = 'suporteSup';
            }
            include(DIRREQUIRES.'app/view/suporte/mensagens.php');
        }
    }







    #Mudar Status do Suporte
    public function dbMudarStatus($status)
    {
        $this->update(
            "sup_status",
            "status=?",
            "id=?",
            array(
                $status,
                1
            )
        );
    }






    #Verifica o status
    public function dbVerificarStatus(){
        $bfSta = $this->select(
            "*",
            "sup_status",
            "where id=?",
            array(1)
        );
        $fSta = $bfSta->fetch(\PDO::FETCH_ASSOC);

        if ($fSta['status']=='online') {
            return true;
        } else {
            return false;
        }
    }





    #Deletar Mensagens
    public function dbDeletarMensagens()
    {
        $this->Delete(
            "sup_conexao",
            "id>?",
            array(0)
        );

        $this->Delete(
            "sup_mensagem",
            "id>?",
            array(0)
        );
    }





    #Exibindo lista de usuários (no suporte administrador)
    public function dbListarUsuariosOnline(){
        $bfCon = $this->select("*", "sup_conexao", "", array());
        while($fCon=$bfCon->fetch(\PDO::FETCH_ASSOC)) {
            echo "
                <div class='suporteAdm'>
                    <a href='" . DIRPAGINAS . "suporte/administrador/{$fCon['conexao']}' title='Conectar'>$fCon[conexao]</a>
                </div>
            ";
        }
    }


}