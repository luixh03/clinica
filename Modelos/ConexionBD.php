<?php

class ConexionBD{

	public static function cBD(){

		$bd = new PDO("mysql:host=localhost;dbname=clinica", "root", "");

		$bd -> exec("set names utf8");

		return $bd;
	}
}