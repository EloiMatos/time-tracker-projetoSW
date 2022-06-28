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
    .centered {
      margin: 0 auto ;
    }
    body{
      margin: 0px;
      text-align: center;
    }
        .container-image {
          background-image: url(fundo.jpg);
          display: table;
          width: 100%;
          height: 100vh;
          padding: 100px 0;
          background-position:center;
          background-size: cover
        }
        .label{
            text-align: center;
            padding: 12px;
            background-color:whitesmoke;
            color: black;
            border-radius: 20px;
            border: none;
            margin-right: 5px;
        }
        .title{
            background-color:black;
            text-align: center;
            color: white;
            padding: 15px;
        }
        table, th, td {border:1px solid black;}
        th { text-align: center;}
  </style>
</head>
<body>
    <form action="processa.php?acao=adicionar" method="post">
    	<div>
            <h1 class="title"> TIME TRACKER </h1>
    		<p>
            <label for="description" style="color:black;" class="form-label">Descrição:</label>
            <input type="text" name="description" class="label" ><br><br>
            <label for="startHours" style="color:black;" class="form-label">Hora inicial:</label>
            <input type="time" name="startHours" class="label"><br><br>
            <label for="endHours" style="color:black;" class="form-label">Hora final:</label>
            <input type="time" name="endHours"  class="label" ><br><br>
            <label for="date" style="color:black;" class="form-label">Data:</label>
            <input type="date" name="date"  class="label" > <br><br>

            <label for="type">Tipo:</label>
            <select name="type" class="label" id="exampleFormControlSelect1">
              <option value="Trabalho">Trabalho</option>
              <option value="Viagem">Viagem</option>
              <option value="Curso">Curso</option>
            </select> <br><br>
            <button type="submit" style="background-color:black;color: whitesmoke;padding: 8px 30px;font-weight: bold;"  class="label" onClick="enviar();">Enviar</button>
            </p>
    	</div>
    </form>
    <h2 class="title">JORNADA DE HORAS:</h2>
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
          <th align="center">Excluir</th>
        </tr>
        <?php foreach ($rows as $workarea):?>
          <tr>
            <td align="center"><?php echo $workarea['description'];?></td>
            <td align="center"><?php echo $workarea['startHours'];?></td>
            <td align="center"><?php echo $workarea['endHours'];?></td>
            <td align="center"><?php echo $workarea['date'];?></td>
            <td align="center"><?php echo $workarea['type'];?></td>
            <td align="center"><a href="delete.php?id=<?php echo $workarea['id'];?>">X</a></td>
          </tr>
        <?php endforeach;?>
        </table>
</body>
<script>
    function enviar(){
        alert("As horas foram salvas com sucesso");
    }
</script>
</html>