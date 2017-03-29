<?php
	// The global $_POST variable allows you to access the data sent with the POST method by name
	// To access the data sent with the GET method, you can use $_GET
	$v0 = htmlspecialchars($_POST['value0']);
	$v1 = htmlspecialchars($_POST['value1']);
	$v2 = htmlspecialchars($_POST['value2']);
	$v3 = htmlspecialchars($_POST['value3']);
	$v4 = htmlspecialchars($_POST['value4']);
	$GUID = htmlspecialchars($_POST['GUID']);
	$notes = htmlspecialchars($_POST['notes']);

	echo '<h1>Submitted Items</h1>';
	echo nl2br("1: $v0 \n 2: $v1 \n 3: $v2 \n 4: $v3 \n 5: $v4 \n");
	echo '<h3>Thank you for your entry!</h3>';
	echo '<a href="/">Back to Main Page</a>';
	// echo '<h4 style="color: red;">PLEASE DO NOT REFRESH THIS PAGE</h4>';
	  
	$myfile = fopen("results.txt", "a");

	$txt = "1: $v0 2: $v1 3: $v2 4: $v3 5: $v4 GUID: $GUID Notes: $notes\r\n";
	fwrite($myfile, $txt);
	fclose($myfile);  
?>