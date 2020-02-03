<?php
	class Db {

		//Properties and Methods goes here
		private $servername;
		private $user;
		private $password;
		private $dbname;
		private $dsn;

		protected function connect() {
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->dbname = "sample_db";
			$this->dsn = 'mysql:host='.$this->servername.';dbname='.$this->dbname;

			$conn = new PDO($this->dsn, $this->username, $this->password);

			return $conn;
		}
	}

	$object = new Db;
?>