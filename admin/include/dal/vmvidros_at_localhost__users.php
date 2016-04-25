<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id");
$dalTableusers["nome"] = array("type"=>200,"varname"=>"nome");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["senha"] = array("type"=>200,"varname"=>"senha");
	$dalTableusers["id"]["key"]=true;

$dal_info["vmvidros_at_localhost__users"] = &$dalTableusers;
?>