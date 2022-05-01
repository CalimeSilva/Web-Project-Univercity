<?php

	class Validacao
	{
		public function NomeValidar($nomePost)
		{
			$nome = $_POST[$nomePost];
			if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
				$nameErr = "Only letters and white space allowed";
			}
		}
	}
