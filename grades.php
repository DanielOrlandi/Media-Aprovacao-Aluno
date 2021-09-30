<?php
session_start();
$numstudents = $_SESSION['f_numstudents'];
$aluno = array(array());
for($i = 0; $i < $numstudents; $i++){
	for($j = 0; $j < 2; $j++){
		$aluno[$i][$j] = $_POST[$i."_nota".$j];
		if($j == 0){
			$average = $aluno[$i][$j];
		}
		else{
			$average = ($average + $aluno[$i][$j])/2;
		}
	}
	echo "Estudante ".++$i."<br/><br/>";
	echo "Média: $average<br/><br/>";
	if($average >= 0 & $average < 3){
		echo "Aluno foi: <font color=red>Reprovado</font><br/><br/><hr/><br/>";
	}
	else if($average < 6){
		echo "Aluno está de: <font color=orange>Recuperação</font><br/><br/><hr/><br/>";
	}
	else{
		echo "Aluno foi: <font color=green>Aprovado</font><br/><br/><hr/><br/>";
	}
	$i--;
}

?>