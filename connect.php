<?php
$conn_string="host=ec2-3-215-83-17.compute-1.amazonaws.com port=5432 dbname=des8vbrkksmo3s user=eonlwbmtlkhysv password=2bd656544d489e3384df062665990cd255defa3dc286d1b71c8f9fd3f416428b";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
