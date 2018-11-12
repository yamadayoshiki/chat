<!DOCTYPE html>
<html>
<head>
	<title>チャット</title>
	<style>
		h1{
			font-size:12pt;
			border-bottom: 1px solid gray;
			color: blue;
		}
		form{
			border: 1px solid gray;
			padding: 10px;
			margin-bottom: 15px;
		}
		.timestamp{
			color: lightgray;
			font-size: 8pt;
		}
	</style>
</head>
<body>

<h1>秘密のチャット</h1>
<form action="write.php">
<?php
	echo $_GET['uname'];
?>
	<input type = "hidden" name = "uname" value = "<?= $_GET['uname']?>">
	<input type="text" name="msg">
	<button>送信</button>
</form>

<?php
$fp = fopen("data.txt", "r");
while( ($buff=fgets($fp)) != false ){
	$line = explode("\t", $buff);
	echo $line[0].":";
	echo $line[1];
	echo " <span class=\"timestamp\">".date("Y-m-d H:i:s", $line[2])."</span>";
	echo "<br>\n";
}
fclose($fp);
?>

</body>
</html>
