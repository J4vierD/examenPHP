<?php
 class Users {
	 public $username = null;
	 public $password = null;
	 public $salt = "Zo4rU5Z1YyKJAASY0PT6EUg7BBYdlEhPaNLuxAwU8lqu1ElzHv0Ri7EM6irpx5w";
	 
	 public function __construct( $data = array() ) {
		 if( isset( $data['username'] ) ) $this->username = stripslashes( strip_tags( $data['username'] ) );
		 if( isset( $data['password'] ) ) $this->password = stripslashes( strip_tags( $data['password'] ) );
	 	 if( isset( $data['mail'] ) ) $this->mail = stripslashes( strip_tags( $data['mail'] ) );
	 }
	 
	 public function storeFormValues( $params ) {
		$this->__construct( $params ); 
	 }
	 
	 public function userLogin() {
		 $success = false;
		 try{
			$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
			$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$sql = "SELECT * FROM tfeusers WHERE username = :username AND password = :password LIMIT 1";
			
			$stmt = $con->prepare( $sql );
			$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
			$stmt->bindValue( "password", hash("sha256", $this->password . $this->salt), PDO::PARAM_STR );
			
			$stmt->execute();
			
			$valid = $stmt->fetchAll(); 
             
			if( $valid ) {
				$success = true;
                
                $_SESSION['logged_in'] = "ok";
                $_SESSION['username'] = $valid[0]['username'];
				$_SESSION['mail'] = $valid[0]['mail'];
				$_SESSION['id'] = $valid[0]['id'];
				$_SESSION['city'] = $valid[0]['city'];
				$_SESSION['name'] = $valid[0]['name'];
				$_SESSION['twitter'] = $valid[0]['twitter'];
				$_SESSION['facebook'] = $valid[0]['facebook'];
			}
			
			$con = null;
			return $success;
		 }catch (PDOException $e) {
			 echo $e->getMessage();
			 return $success;
		 }
	 }
	 
	 public function register() {
		$correct = false;
			try {
				$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
				$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$sql = "INSERT INTO tfeusers(username, password, mail) VALUES(:username, :password, :mail)";
				
				$stmt = $con->prepare( $sql );
				$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
				$stmt->bindValue( "password", hash("sha256", $this->password . $this->salt), PDO::PARAM_STR );
				$stmt->bindValue( "mail", $this->mail, PDO::PARAM_STR );
				$stmt->execute();
				
			}catch( PDOException $e ) {
				return $e->getMessage();
			}
	 }
	 
 }
 
?>