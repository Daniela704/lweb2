<?php
//script per la connessione al database(accesso server DBMS)
	$conn= mysqli_connect("localhost", "lweb14", "lweb14", "lweb14");
	
	if(mysqli_errno($conn)){
		printf("Conessione al database non riuscita./n%s/n",mysqli_error($conn));
		exit();
	}
	
?>