<?php
	$database="crud";
	$user='postgres';
	$password='empacadorandroid';


try {
	
	$con=new PDO('pgsql:host=34.94.12.209;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>