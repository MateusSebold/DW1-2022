
<?php
    // verificar dados enviados
    // echo 'Dados enviados:<br>';
    // echo '<pre>';
    // var_dump($_GET);
    // echo '</pre>';
    $nome = isset($_POST['nome'])?$_POST['nome']:'';
    $sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:'';
    $dtnasc = isset($_POST['dtnasc'])?$_POST['dtnasc']:'';
    $email= isset($_POST['email'])?$_POST['email']:'';
    $telefone = isset($_POST['telefone'])?$_POST['telefone']:'';
    $feminino = isset($_POST['sexofeminino'])?$_POST['sexofeminino']:'';
    $masculino = isset($_POST['sexomasculino'])?$_POST['sexomasculino']:'';
    $parente = isset($_POST['parente'])?$_POST['parente']:'';
    $foto = isset($_POST['foto'])?$_POST['foto']:'';
    $origem = isset($_POST['origem'])?$_POST['origem']:'';
    $estado = isset($_POST['estado'])?$_POST['estado']:'';
    $cidade = isset($_POST['cidade'])?$_POST['cidade']:'';

    $dados = array();

    function salvaContexto(){
        $novosdados = array();
        $novosdados[] = ['nome'=>$nome];
        $novosdados[] = ['sobrenome'=>$sobrenome];
        $novosdados[] = ['dtnasc'=>$dtnasc];
        $novosdados[] = ['email'=>$email];
        $novosdados[] = ['telefone'=>$telefone];
        $novosdados[] = ['sexofeminino'=>$feminino];
        $novosdados[] = ['sexomasculino'=>$masculino];
        $novosdados[] = ['parente'=>$parente];
        $novosdados[] = ['foto'=>$foto];
        $novosdados[] = ['origem'=>$origem];
        $novosdados[] = ['estado'=>$estado];
        $novosdados[] = ['cidade'=>$cidade];
        return $novosdados;
    }

    function inserir($dados){//
        $arquivo = fopen('contatod.json','w+');
        fwrite($arquivo,json_encode($dados));
        fclose($arquivo);
    }

    function buscaDados(){
        $arquivo = fopen('contatod.json','r');
        $dados = json_encode($arquivo);
        fclose($arquivo);
        return $dados;
    }

    function excluir($dados){
		$dados = 'DELETE FROM '.$GLOBALS['nome'].
		       ' WHERE codigo =  '.$dados;
		$result = mysqli_query($GLOBALS['nome'],$sql);
		if ($result == 1)
			header('acao.php');
		else
			header('acao.php');
	}

    /*
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
    */


    /*if (isset($_POST['nome'])){
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
    */
?> 