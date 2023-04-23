<?php

include("../config/config.php");
	
    //INSERT INTO tb_planilha (locadora, lote, data_limite,data_infracao,hora,ait,placa,login,epo,supervisor,cod_infracao,descricao,valor,pontos,fator_multa,assinou)
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
    // carregar arquivo do formulario
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){
				$locadora = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				echo "Locadora: $locadora <br>";
				
				$lote = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				echo "Lote: $lote <br>";
				
				$data_limite = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				echo "Data Limite: $data_limite <br>";

                $data_infracao = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
				echo "Data Infracao: $data_infracao <br>";

                $hora = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
				echo "Hora da Infracao: $hora <br>";

                $ait = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
				echo "AIT: $ait <br>";

                $placa = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
				echo "PLACA: $placa <br>";

                $login = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
				echo "LOGIN: $login <br>";

                $condutor = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
				echo "CONDUTOR: $condutor <br>";

                $epo = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
				echo "EPO: $epo<br>";

                $supervisor = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
				echo "SUPERVISOR: $supervisor <br>";

                $cod_infracao = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
				echo "CODIGO DA INFRACAO: $cod_infracao <br>";

                $descricao = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
				echo "DESCRICAO: $descricao <br>";

                $valor = $linha->getElementsByTagName("Data")->item(13)->nodeValue;
				echo "VALOLR: $valor <br>";

                $pontos = $linha->getElementsByTagName("Data")->item(14)->nodeValue;
				echo "PONTOS: $pontos <br>";

                $fator_multa = $linha->getElementsByTagName("Data")->item(15)->nodeValue;
				echo "FATOR MULTA: $fator_multa <br>";

                $assinou = $linha->getElementsByTagName("Data")->item(16)->nodeValue;
				echo "PAGOU: $assinou <br>";
				
				echo "<hr>";

                //Inserir o usuário no BD
                $result_usuario = "INSERT INTO tb_planilha (locadora, lote, data_limite, data_infracao, hora, ait, placa, login_condutor,condutor, epo, supervisor, cod_infracao, descricao, valor, pontos, fator_multa, assinou)
                VALUES ('$locadora', '$lote', '$data_limite', '$data_infracao', '$hora', '$ait', '$placa', '$login', '$condutor', '$epo', '$supervisor', '$cod_infracao', '$descricao', '$valor', '$pontos', '$fator_multa', '$assinou')";
                
				$resultado_usuario = mysqli_query($conn, $result_usuario);
				
				
			}
			$primeira_linha = false;
		}
	}
?>