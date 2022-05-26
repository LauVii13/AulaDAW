<?php

	$meuArray = array();
	$meuArray = array("Maçã", "Melão", "Uva");

    print_r($meuArray);
    echo"<br><br>";

//unset - destrói elemento
	/* unset($meuArray[1]);
	echo "<br>";
	print_r($meuArray);  */

//count / sizeof - retorna tamanho do array
    /* echo count($meuArray);
	echo "<br>";
	echo sizeof($meuArray); */

//foreach - passa por cada elemento do array, atribui a uma variável
    /* foreach($meuArray as $fruta) {
		echo $fruta.", ";
	} */

//push - add ao final
    /* array_push($meuArray, "Laranja");
    print_r($meuArray); */

//pop - extrai um elemento do final do array,retornando seu valor
    /* array_pop($meuArray);
    print_r($meuArray);  */

//shift - extrai um elemento do começo do array, retornando seu valor
    /* array_shift($meuArray);
    print_r($meuArray); */ 

//unshift - add ao começo
    /* array_unshift($meuArray,"Laranja");
    print_r($meuArray); */

//map - aplica a função chamada em cada elemento do array referido
    /* function insereDelimitador($valor) { 
		return $valor." - "; 
	}

    $meuArray = array_map("insereDelimitador", $meuArray);

    print_r($meuArray); */

//key_exists - Checa se uma chave ou índice existe em um array => (valor p/ verificar, em qual array vai verificar) (if ternário)
   /* echo array_key_exists(2, $meuArray) ? "Tem Melão"
	                                         : "Não tem Melão"; */

//keys - retorna posição de um array
    /* $keys = array_keys($meuArray);
    print_r($keys); */
    
//search - retorna a posição do texto no array
    /* $key = array_search("Melão", $meuArray);
	echo $key; */

//in - retorna 1 caso exista o texto procurado no array
    /* $key = in_array("Maçã", $meuArray);
	echo $key; */

//shuffle - embaralha os valores do array
    /* shuffle($meuArray);
    print_r($meuArray); */

//sort - organiza do menor para o maior (ou de A-Z)
    /* sort($meuArray);
    print_r($meuArray); */

//rsort - organiza do maior para o menor (ou de Z-A)
   /*  rsort($meuArray);
    print_r($meuArray); */

//parse_str - converte strings em variáveis
    /* $str = "curso1=Informática&curso2=Edificações&curso3=Enfermagem";

	parse_str($str,$cursos);
    print_r($cursos); */

//explode - divide uma string em varias strings no ponto do texto referido
    /* $str = "Informática Edificações Enfermagem";
	$cursos = explode("a",$str);
	print_r($cursos); */

//implode - junta um array em string add um texto nos limites
    /* $cursos = array("Informática","Edificações","Enfermagem");
	$str = implode(" | ", $cursos);
	print_r($str); */