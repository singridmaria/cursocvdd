<!DOCTYPE html>
<html>
<head>
	<title>tabela de preços</title>
</head>
<body>
<?php
//Array dia

        $dia [0] = "Domingo";
        $dia [1] = "Segunda";
        $dia [2] = "Terça";
        $dia [3] = "Quarta";
        $dia [4] = "Quinta";
        $dia [5] = "Sexta";
        $dia [6] = "Sabado";


//Array dos pratos de cada dia 

        $prato [0] = "Lasanha";
        $prato [1] = "Frango";
        $prato [2] = "Arroz";
        $prato [3] = "Feijoada";
        $prato [4] = "Nhoque";
        $prato [5] = "Bacalhau";
        $prato [6] = "Feijão";
        //array dos valores
        $valor [0] = "R $ 12,60";
        $valor [1] = "R $ 10,00";
        $valor [2] = "R $ 09,40";
        $valor [3] = "R $ 11,20";
        $valor [4] = "R $ 08,50";
        $valor [5] = "R $ 15,20";
        $valor [6] = "R $ 10,00";


?>
<center>
<table border="1">
<thead>
	<tr>
		<th>Elemento</th>
		<th>Dia da semana</th>
		<th>Prato do dia</th>
		<th>Preços</th>
	</tr>


</thead>
<tbody>
	<?php
	foreach ($dia as $elemento => $dias ) {
		echo '<tr>';
		echo '<td>'.$elemento.'</td>';
		echo  '<td>'.$dia[$elemento].'</td>';    
        echo  '<td>'.$prato[$elemento].'</td>';
        echo  '<td>'.$valor[$elemento].'</td>';
        echo '</tr>';
       
        }

	?>
</tbody>

</table>
<?Php
 
echo ("Hoje é ".$dia [date ("N")]. "<Br>");
              Echo ("O prato é ". $prato [date ("N")]. " no valor de: ". $valor [date ("N")]);
        ?>


</center>
     
</body>
</html>