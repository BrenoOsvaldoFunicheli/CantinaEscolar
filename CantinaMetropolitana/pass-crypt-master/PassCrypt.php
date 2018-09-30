<?php
	/*
		salt => minimo 22 /^a-zA-Z0-9\./i
		custo => int 4 a 31
		string => $hashType$custo$salt$
	*/

	class PassCrypt{
		private $hashType = '2a';
		private $custo;

		public function __construct($custo = null){
			$this->setCost($custo);
		}

		private function setCost($custo){
			if(empty($custo)){
				$this->custo = '07';
			}else{
				if($custo >= 4 && $custo <= 31){
					$custo = ($custo < 10) ? '0'.$custo : $custo;
					$this->custo = $custo;
				}else{
					$this->custo = '07';
				}
			}
		}

		private function generateSalt(){
			$salt = '';
			$alfabeto = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$numeros = '0123456789';

			$str = $alfabeto.$numeros;
			$qtd = strlen($str);

			for($i = 0; $i<22;$i++){
				$salt .= $str[rand(0, $qtd-1)];
			}
			return $salt;
		}

		public function hashSenha($senha){
			$salt = $this->generateSalt();
			if(preg_match('/^[a-zA-Z0-9]/i', $salt)){
				$strSalt = '$'.$this->hashType.'$'.$this->custo.'$'.$salt.'$';
				$senha = crypt($senha, $strSalt);
				return $senha;
			}

			return null;
		}


		public function compareHash($senha, $hash){
			return (crypt($senha, $hash) == $hash) ? true :false;
		}
	}