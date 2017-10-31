<?php
# Instanciando as Classes ------------------------------------------------------------- #
$ObjMail=new PHPMailer();













# Recebendo as variáveis ------------------------------------------------------------- #
if(isset($_POST['Nome'])){$Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_STRING);}
if(isset($_POST['Email'])){$Email=filter_input(INPUT_POST,'Email',FILTER_SANITIZE_STRING);}
if(isset($_POST['Telefone'])){$Telefone=filter_input(INPUT_POST,'Telefone',FILTER_SANITIZE_STRING);}
if(isset($_POST['Mensagem'])){$Mensagem=filter_input(INPUT_POST,'Mensagem',FILTER_SANITIZE_STRING);}
$Servidor="mail.fvadvogados.com.br";
$Usuario='fv@fvadvogados.com.br';
$Senha='FerrerVecchiatti2017';
$Destinatario='fv@fvadvogados.com.br';
$Titulo='FV ADVOGADOS | Contato do Site';
$Assunto="
<strong>$Titulo</strong><br>
Nome: $Nome <br>
Email: $Email <br>
Telefone: $Telefone <br>
Mensagem: $Mensagem
";
















# Instâncias ------------------------------------------------------------- #
$ObjMail->IsSMTP();
$ObjMail->Host = $Servidor;
$ObjMail->SMTPAuth = true;
$ObjMail->Username = $Usuario;
$ObjMail->Password = $Senha;
$ObjMail->From = $Email;
$ObjMail->FromName = $Nome;
$ObjMail->AddAddress($Destinatario, $Titulo);
$ObjMail->IsHTML(true);
$ObjMail->CharSet = 'utf-8';
$ObjMail->Subject  = $Titulo;
$ObjMail->Body = $Assunto;
$Enviado = $ObjMail->Send();
$ObjMail->ClearAllRecipients();
$ObjMail->ClearAttachments();
if($Enviado=true){
    echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='{$DirPaginas}';</script>";
}else{
    echo "<script>alert('Houve uma falha. Tente novamente!'); window.location.href='{$DirPaginas}';</script>";
}





