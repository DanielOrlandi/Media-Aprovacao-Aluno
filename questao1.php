<?php
session_start();
$numstudents = $_POST["f_quant"];
$_SESSION['f_numstudents'] = $numstudents;
	
function grades($i){
	echo '<label>Estudante </label>';
	echo $i."<br/>";
	echo '<label>Nota 1</label><br/>';
	echo '<input type="text" name="';
	$i--;
	echo $i;
	echo '_nota0" size="10" maxlength="30"/><br/><br/>';
	echo '<label>Nota 2</label><br/>';
	echo '<input type="text" name="';
	echo $i;
	echo '_nota1" size="10" maxlength="30"/><br/><br/><hr/>';
}
function submit(){
	echo '<input type="submit" value="Enviar"/>';
}

?>

<html>
<head>
	<title>Questão1</title>
</head>
<body>
	<form name="f_ques" method="post" action="grades.php">
		<?php
			for($i = 1; $i <= $numstudents; $i++){
				grades($i);
			}
			submit();
		?>
	</form>
</body>
</html>