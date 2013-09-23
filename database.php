<?php

 class Database{
	
	var $hostname 	= '';
	var $dbname		= '';
	var $dbuser		= '';
	var $dbpass		= '';
	
	function __construct(){
		$this->init();
	}
	
	function init(){
		// Initialize PDO database connection..
		return 'Yeaboi.!';
	}
 }
 
 $PDO = new Database();
 
 print_r($PDO);
?>