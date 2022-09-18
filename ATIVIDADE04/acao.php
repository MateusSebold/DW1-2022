
<?php
// verificar dados enviados
// echo 'Dados enviados:<br>';
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';
$nome = isset($_POST['nome'])?$_POST['nome']:'';
$sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:'';
$datanasc = isset($_POST['dtnasc'])?$_POST['dtnasc']:'';
$email= isset($_POST['email'])?$_POST['email']:'';
$telefone = isset($_POST['telefone'])?$_POST['telefone']:'';


$feminino = isset($_POST['sexofeminino'])?$_POST['sexofeminino']:'';
$masculino = isset($_POST['sexomasculino'])?$_POST['sexomasculino']:'';

$parente = isset($_POST['parente'])?$_POST['parente']:'';
$foto = isset($_POST['foto'])?$_POST['foto']:'';
$origem = isset($_POST['origem'])?$_POST['origem']:'';
$estado = isset($_POST['estado'])?$_POST['estado']:'';
$cidade = isset($_POST['cidade'])?$_POST['cidade']:'';



if (isset($_POST['nome'])){
    echo 'Olá '.$_POST['nome'];
}else{
    header('location: contato.html');

    $dados = array('Nome'=>$nome,'Sobrenome'=>$sobrenome);

   $arquivo = fopen('contatos.json','w+');
   fwrite($arquivo,json_encode($dados));
   fclose($arquivo);
}  
if (($nome!="")&&($sobrenome!="")&&($datanasc!="")&&($email!="")&&($telefone!="")&&(($feminino!=""||($masculino!="")))&&($parente!="")&&($origem!="")&&($estado!="")($cidade!="")){
    $dados = array($nome,$sobrenome,$datanasc,$email,$feminino,$masculino,$parente,$origem,$estado,$cidade);

    $arquivo = fopen('contatos.json','w+');
    fwrite($arquivo,json_encode($dados));
    fclose($arquivo);

    
}

?> 