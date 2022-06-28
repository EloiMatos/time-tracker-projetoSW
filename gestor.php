<?php
    session_start();
    require_once("banco.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Time Tracker</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: whitesmoke;
			margin: 0px;
        	text-align: center;
		}
		.title{
            background-color:black;
            text-align: center;
            color: white;
            padding: 15px;
        }
        .label{
            text-align: center;
            padding: 6px;
            background-color:whitesmoke;
            color: black;
            border-radius: 20px;
            margin-right: 5px;
        }
        table, th, td {border:1px solid black;}
        th { text-align: center;}
	</style>
</head>
<body>
	<h1 class="title"> TIME TRACKER </h1>
	<form action="filtro.php?acao=buscar" method="get">
		<label for="date" style="color:black;" class="form-label">Data Inicial:</label>
    	<input type="date" id="dateI" name="date"  class="label" >
    	<label for="date" style="color:black;" class="form-label">Data Final:</label>
    	<input type="date" id="dateF" name="date"  class="label" >
    	<button type="submit" style="background-color:black;color: whitesmoke;padding: 8px 30px;font-weight: bold;"  class="label" onClick="enviar();">Filtrar</button>
	</form>
	<?php
      	$query = $db->query("SELECT * FROM horas");
      	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="80%" height="100px" id="backgroundTable">
        <tr>
          <th align="center">Descrição</th>
          <th align="center">Hora Inicial</th>
          <th align="center">Hora Final</th>
          <th align="center">Data</th>
          <th align="center">Tipo</th>
        </tr>
        <?php foreach ($rows as $workarea):?>
          <tr>
            <td align="center"><?php echo $workarea['description'];?></td>
            <td align="center"><?php echo $workarea['startHours'];?></td>
            <td align="center"><?php echo $workarea['endHours'];?></td>
            <td align="center"><?php echo $workarea['date'];?></td>
            <td align="center"><?php echo $workarea['type'];?></td>
          </tr>
        <?php endforeach;?>
        </table>
</body>
</html>