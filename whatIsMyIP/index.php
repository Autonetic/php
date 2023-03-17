<?PHP
/***********$-=[coded by autonetix.co]=-$***********/
//Check IP using server
$ip=$_SERVER['REMOTE_ADDR']; //Users current IP
$ip2=$_SERVER['HTTP_X_FORWARDED_FOR']; //If user is behind proxy
$ip3=$_SERVER['REMOTE_HOST']; //Users Host Name
$ip4=$_SERVER['REMOTE_PORT']; //Users port being used to access page
?>
<!-- 
<?PHP
if ($ip2 == 0) {
  echo "Proxy Not In Use";
}
?>
-->
<!DOCTYPE html>
<html>
<head>
<title>What's My IP?</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="border">
	<h1>Check Your IP Address</h1>
	<br>
	<div class="glow">
		<h2>Your IP is:<b> <?PHP echo "$ip";?></b></h2>
	</div>
	<br>
	<h1>Proxy Status</h1>
	<br>
	<div class="glow">
		<h2>Your Proxy is:<b> <?PHP echo "$ip2";?></b>
		<br>
		<b><?PHP echo "$ip2 Proxy in use: " .(boolval($ip2) ? 'true' : 'false') . "<br>";?></b></h2>
	</div>
		<br>
	<h1>Users Host Name</h1>
	<br>
	<div class="glow">
		<h2>Your Host Name is:<b> <?PHP echo "$ip3";?></b></h2>
	</div>
		<br>
	<h1>Users Port Being Used to Access Page</h1>
	<br>
	<div class="glow">
		<h2>Your Port is:<b> <?PHP echo "$ip4";?></b></h2>
	</div>
</div>
</body>
</html>
