<?php
class user{
	private $name = null;
	private $surname = null;
	private $email = null;
	private $username = null;
	private $password = null;
	
	
	function __construct($name,$surname,$email,$username,$password){
		$this->name=$name;
		$this->surname=$surname;
		$this->email=$email;
		$this->username=$username;
		$this->password=$password;		
	}

	public function getName(){
		return $this->name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getUsername(){
		return $this->username;
	}
}