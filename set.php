<?php
$ret="";
if( isset($_GET['id']) AND !empty($_GET['id'])) {
	$id = htmlspecialchars($_GET['id']);
	if ( $id == 1 ){
		$ret = shell_exec("sudo /gpio/set1.py");
	} elseif ( $id==2){
		$ret = shell_exec("sudo /gpio/set2.py");
	} elseif ( $id==3){
		$ret = shell_exec("sudo /gpio/set3.py");
	} elseif ( $id==4){
		$ret = shell_exec("sudo /gpio/set4.py");
	} elseif ( $id==5){
		$ret = shell_exec("sudo /gpio/set5.py");
	} else {
		$ret = "id non valide";
	}
} else {
	$ret = "pas d'id fourni";
}
header('location: index.php?ret=' . $ret );
?>
