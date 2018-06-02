
<form>
<body>
Username: <input type="text" name="Username"><br>
Password: <input type="password" name="Password"><br>
<input type="submit">
</body>
</form>
<?php
$users=array();
$passwords=array();
$privilege=array();
$myfile = fopen("logini.txt", "r") or die("Nevar atvert failu!");
while(!feof($myfile)) {
  array_push($users, fgets($myfile));
  array_push($passwords, fgets($myfile));
  array_push($privilege, fgets($myfile));
}
fclose($myfile);
$sk=count($users);

session_start();
$user = $_GET["Username"];
$password = $_GET["Password"];
if ($user=='' or $password=='') {
	echo'Ievadiet datus';
}
else {
	$piekluve=0;
for($i=0; $i<$sk; $i++){
	if($user==$users[$i] and $password==$passwords[$i]) {
		$piekluve=1;
	}
}
}
$_SESSION['aaa']=$user;
$_SESSION['bbb']=$password;
/*header('Location: B.php');*/


?>