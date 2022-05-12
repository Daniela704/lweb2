<?php
include("connection.php");

	$table=	"CREATE TABLE IF NOT EXISTS utente(
			id INT(11) NOT NULL AUTO_INCREMENT ,
			nome VARCHAR(30) NOT NULL ,
			cognome VARCHAR(30) NOT NULL ,
			email VARCHAR(30) NOT NULL ,
			password VARCHAR(30) NOT NULL ,
			PRIMARY KEY (id))";
	if($ris=mysqli_query($conn,$table)){
		echo '<br />Tabella creata';
		$aggiungi = "INSERT INTO utente ('nome','cognome','email','password') VALUES  
		('Matteo','Rossi','a@','pass1'),
		('Mario','Bianchi','b@','pass2'),
		('Aldo','Basso','c@','pass3'),
		('Gianna','Gianni','d@','pass4'),
		('Paolo','Paoli','e@','pass5')";
					 
		$ris2=mysqli_query($conn,$aggiungi);
		echo '<br />Tabella popolata';
		exit();
	}
mysqli_close($conn);
?>


