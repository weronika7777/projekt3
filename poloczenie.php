<?php

$db_user ='s145656';
$db_password ='pe3o5Vkk#46N';

try{
	$poloczenie = new PDO('mysql:host=localhost;dbname=s145656',$db_user, $db_password);

}catch (PDOException $exception){
	echo 'Nie dziala';
}
?>