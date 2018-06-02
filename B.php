<?php
session_start();
$user=$_SESSION['aaa'];
$password=$_SESSION['bbb'];

if ($user=='alex' and $password=='Parole') {
echo 'Slepena informacija'; 

echo '<br><a href="logout.php">Atslegties</a>';
}
else {
	echo 'Nepareizs lietotajvards vai parole';
	echo '<br><a href="logout.php">Atgriezties</a>';
}
?>