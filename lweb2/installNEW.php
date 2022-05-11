<?php
$conn = mysqli_connect("localhost","admin",""); // connessione al DB
$nome = "compito2";
$query = "CREATE DATABASE if NOT EXISTS $nome";

// il risultato della query va in $ris
if ($ris = mysqli_query($conn, $query)) {
    printf("Database $nome creato");
	$table=	"CREATE TABLE if NOT EXISTS $nome.utente(
			id INT(11) NOT NULL AUTO_INCREMENT ,
			nome VARCHAR(30) NOT NULL ,
			cognome VARCHAR(30) NOT NULL ,
			email VARCHAR(30) NOT NULL ,
			password VARCHAR(30) NOT NULL ,
			PRIMARY KEY (id))";
	if($ris2=mysqli_query($conn,$table)){
		echo '<br />Tabella creata';
		$aggiungi = "INSERT INTO `$nome`.`utente` (`nome`,`cognome`,`email`,`password`) VALUES  
		('Matteo','Rossi','a@','pass1'),
		('Mario','Bianchi','b@','pass2'),
		('Aldo','Basso','c@','pass3'),
		('Gianna','Gianni','d@','pass4'),
		('Paolo','Paoli','e@','pass5')";
					 
		$ris3=mysqli_query($conn,$aggiungi);
		echo '<br />Tabella popolata';
		exit();
	}
}
else {
    echo '<br />Errore nella creazione del Database';
  exit();
}
mysqli_close($conn);
?>

INSERT INTO `libreria`.`lettore` (`codice`, `nome`, `cognome`,`data_reg`) VALUES ('1', 'Mario', 'Rossi', '2020-11-03');

