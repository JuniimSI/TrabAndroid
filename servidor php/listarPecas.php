<?php

	$conexao = mysql_connect('localhost','root','');
	mysql_select_db('android', $conexao);
	$sql = "select * from peca";
	$res = mysql_query( $sql) or die ("
		Erro:".mysql_error());

	$result = array();

	while($row = mysql_fetch_array($res)){
		array_push($result, 
			array('id'=>$row[0],
					'name'=>$row[1],
					'detalhes'=>$row[2]	));
	}

	echo json_encode(array("result"=>$result));

	mysql_close($conexao);



	/*while($linha = mysql_fetch_object($resultado))
		echo $linha->nome."#";
	echo "^";*/

/*	while ($linha = mysql_fetch_assoc($resultado)) {
		$output[] = $linha;
	}
	print json_encode($output);
*/	

/*;	if(mysql_num_rows($resultado) > 0)
		echo "1";
	else
		echo 0;
*/


?>
