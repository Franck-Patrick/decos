<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Arsenal&family=Geo&family=Geostar&family=Oswald&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/1669913370571-removebg-preview.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Arsenal&family=Geo&family=Geostar&family=Lato:wght@100&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="js/java.js"></script>
</head>
<body>
    <header class=" bg-light d-flex justify-content-center py-3">
        <a href="index.html" class="link"><img class="imagem" src="img/04_MARCA-DECOS_HORIZONTAL-POSITIVO-1024x683.png" alt="" width="90" height="60"></a>
        <a href="" class="link"><img src="img/1669913370571-removebg-preview.png" alt="" class="ij" height="40" width="40"></a>
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-links  text-secondary">Procedimentos</a></li>
          <li class="nav-item"><a href="#" class="nav-links  text-secondary">Pacientes</a></li>
          <li class="nav-item"><a href="#" class="nav-links  text-secondary">Funcionários</a></li>
        </ul>
      </header>
    <main class="corpo">
        <form>
            <h1 class=" text-center h3 mb-3 fw-normal">Painel de centro cirúrgico</h1>
			
			
			<table style="font-size:20pt;color:#FFF8DC">
				<tr>
					<td style="width:5%">#</td>
					<td style="width:25%">Paciente</td>
					<td style="width:5%">Início</td>
					<td style="width:5%">Fim</td>
					<td style="width:25%">Médico</td>
					<td style="width:5%">OPME</td>
					<td style="width:25%">Local</td>
				</tr>
				<?php
			$con = mysqli_connect('127.0.0.1','root','','squad23');
			if ($con) {			
				$sql = 'select  * from tb_cirurgia limit 5';
				$result = $con->query($sql);				
				while ($data = mysqli_fetch_assoc($result)){
					echo "<tr>  ";
					echo "	<td>".$data['id']."</td>";
					echo "	<td>".$data['nm_paciente']."</td>";
					echo "	<td>-</td>";
					echo "	<td>-</td>";
					echo "	<td>".$data['nm_medico']."</td>";
					echo "	<td>".$data['nm_opme']."</td>";
					echo "	<td>".$data['nm_local']."</td>";
					echo "</tr>";
				}
			}
			?>
			</table>
			
          </form>
    </main>
    <footer class="  bg-secondary">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"></li>
        </ul>
        <p class="text-center text-light">© 2023 Hospital Decós</p>
        <hr>
        <p class="text-left text-light"> Av. Mario Jorge Menezes Viêira, 2477 - Coroa do Meio, Aracaju - SE, 49035-100</p>
      </footer>
</body>
</html>