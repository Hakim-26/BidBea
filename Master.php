<?php

class Master
{
	var $host;
	var $username;
	var $password;
	var $database;
	var $con;
	var $home_page;
	

	function __construct()
	{
		$this->host = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->database = 'auction-online';
		$this->home_page = "http://localhost/project/online-auction";

		$this->con = new mysqli($this->host, $this->username, $this->password , $this->database);

		session_start();
	}

	
	function send_email($email, $subject, $body)
	{
		$mail = new PHPMailer;
		$mail->IsSMTP(); // enable SMTP
		
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->IsHTML(true);
		$mail->Username = "bidbea.winsave@gmail.com";
		$mail->Password = "bidbea.winsave123";
		$mail->SetFrom("bidbea.winsave@gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->AddAddress($email);
		$mail->Send();

		
	}

}

?>