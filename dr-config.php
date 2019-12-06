<?php 
$drHost ="localhost";
$drUser ="root";
$drPass = "";
$drDb = "dr-certificate-maker";
try{
$drConnect = new PDO("mysql:host=$drHost;dbname=$drDb",$drUser,$drPass);
$drConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $drError){
	echo "Failed To Connect ".$drError->getMessage();
}