<?php

session_start();

error_reporting(E_ERROR);

date_default_timezone_set("Brazil/East");
//vmvidros.rafaeldamasio.com.br
if($_SERVER['SERVER_NAME'] == "localhost"){
	$host 	= "localhost";
	$user	= "root";
	$pass	= "";
	$bd		= "vmvidros";
} else if($_SERVER['SERVER_NAME'] == "vmvidros.rafaeldamasio.com.br"){
	define( 'MYSQL_HOST', 'localhost' );
	define( 'MYSQL_USER', 'vmvidrN3IbXYjvMZ' );
	define( 'MYSQL_PASSWORD', 'cQJ2TxVFpIC3NUR' );
	define( 'MYSQL_DB_NAME', 'vmvidros_rafaeldamasio_com_br' );
} else {
	$host 	= "";
	$user	= "";
	$pass	= "";
	$bd		= "";
}

if($_SERVER['SERVER_NAME'] == "vmvidros.rafaeldamasio.com.br"){
	
	try
	{
		$PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
	}
	catch ( PDOException $e )
	{
		echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
	}

} else {
	$con = mysql_connect($host,$user,$pass);
	$db = mysql_select_db($bd);

	mysql_set_charset('utf8');
}

function protecao($string){

  // Passando a primeira letra pra Maiúsculo e o restante pra minúsculo 
  //$string = strtolower($string);
  
  // Verificando alguns elementos que não podem ser passado por POST e nem por GET, e trocando eles por vazio... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = str_replace("'", "", $string);
  $string = str_replace("#", "", $string);
  $string = str_replace("=", "", $string);
  $string = str_replace("--", "", $string);
  //$string = str_replace("-", "", $string);
  $string = str_replace(";", "", $string);
  $string = str_replace("*", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function consulta_db($sql){
	return mysql_query($sql);
}

function insert_db($sql){
	return mysql_query($sql);
}

function update_db($sql){
	return mysql_query($sql);
}

function deleta_db($sql){
	return mysql_query($sql);
}

function formata_data($data){
	$data = explode(" ", $data);

	$data1 = $data[0]; // DATA (xxxx-xx-xx)
	$data2 = $data[1]; // HORA (xx:xx:xx)
	
	$data1 = explode("-", $data1);
	$dia = $data1[2]; // Retorna o dia
	$mes = $data1[1]; // Retorna o mês
	$ano = $data1[0]; // Retorna o ano
	
	$data = $dia . "/" . $mes . "/" . $ano . " às " . $data2;
	return $data;
}

function formata_data_austrini($data){
	$data = explode("/", $data);

	$data1 = $data[0]; // DATA (xxxx-xx-xx)
	$data2 = $data[1]; // HORA (xx:xx:xx)
	
	if($data2 == "01"){
		$data2 = "jan";
	} else if($data2 == "02"){
		$data2 = "fev";
	} else if($data2 == "03"){
		$data2 = "mar";
	} else if($data2 == "04"){
		$data2 = "abr";
	} else if($data2 == "05"){
		$data2 = "mai";
	} else if($data2 == "06"){
		$data2 = "jun";
	} else if($data2 == "07"){
		$data2 = "jul";
	} else if($data2 == "08"){
		$data2 = "ago";
	} else if($data2 == "09"){
		$data2 = "set";
	} else if($data2 == "10"){
		$data2 = "out";
	} else if($data2 == "11"){
		$data2 = "nov";
	} else if($data2 == "12"){
		$data2 = "dez";
	}
	
	$data = $data1." ".$data2;
	return $data;
}

function removeAcentos($string){
	$string = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string));
	$string = strtolower($string);
	return $string;
}

function separaHora($hora, $seletor){
	$hora = explode("das ", $hora);
	$hora = explode(" às ", $hora[1]);
	return $hora[$seletor];
}

function montaArray($data, $separador){
	$data = explode($separador, $data);
	return $data;
}

function remove_accent($str){
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
  return str_replace($a, $b, $str);
}

function limitaStr($str){
	$str = substr($str,0,255);
	$str = $str."(...)";
	return $str;
}

//GERA LOGS DE ACOES EXECUTADAS NO ADMIN POR QUALQUER USUARIO
function geraLogs($id_usuario, $item, $acao, $query){
	$sql = "INSERT INTO logs (id_usuario, item, acao, query, data) VALUES ('$id_usuario', '$item', '$acao', '".mysql_real_escape_string($query)."', NOW())";
	if(insert_db($sql)){
		return true;
	} else {
		return false;
	}
}

function checaCategorias($valor){
	$tag = "";
	switch($valor){
		case '1':
			$tag = "<span class=\"label label-categoria label-inverse\">Aluno de Graduação</span>";
			break;
		case '2':
			$tag = "<span class=\"label label-categoria label-info\">Aluno Stricto Sensu</span>";
			break;
		case '3':
			$tag = "<span class=\"label label-categoria label-warning\">Docente</span>";
			break;
		case '4':
			$tag = "<span class=\"label label-categoria label-success\">Consultor</span>";
			break;
		case '5':
			$tag = "<span class=\"label label-categoria label-danger\">Funcionário</span>";
			break;		
		default:
			$tag = "";
			break;
	}
	return $tag;
}

function checaStatus($valor){
	$tag = "";
	switch($valor){
		case '1':
			$tag = "<span class=\"label label-status label-success\">Ativo</span>";
			break;
		case '0':
			$tag = "<span class=\"label label-status label-important\">Inativo</span>";
			break;
		
		default:
			$tag = "";
			break;
	}
	return $tag;
}

function check($valor){
	$tag = "";
	switch($valor){
		case '1':
			$tag = "<button class=\"btn btn-mini btn-success\"><i class=\"icon-ok\"></i></button>";
			break;
		case '0':
			$tag = "<button class=\"btn btn-mini btn-danger\"><i class=\"icon-remove\"></i></button>";
			break;
		
		default:
			$tag = "";
			break;
	}
	return $tag;
}

function getDatetimeNow(){
    $tz_object = new DateTimeZone('Brazil/East');
 
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ H:i:s');
}

?>