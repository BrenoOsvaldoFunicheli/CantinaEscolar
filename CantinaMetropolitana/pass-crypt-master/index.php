<?php
	require_once 'PassCrypt.php';
	$hash = new PassCrypt(8);
	$criptografada = $hash->hashSenha('lucasSilva');


	//$hashAnterior = '$2a$08$ZpTxeUzPT2bxkgMTnxZAneyqo/48HdyHCh32h7YiA2pmGE6jZf/MG';
	if($hash->compareHash('lucasSilva', $criptografada)){
		echo 'Senha valida, Logou';
	}else{
		echo 'Senha invalida';
	}
