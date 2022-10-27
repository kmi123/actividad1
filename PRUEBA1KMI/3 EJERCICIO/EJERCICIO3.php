<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    <h1>ingresar el número de partidos ganados,
perdidos y empatados.</h1>
    <h3>Consulta de puntos</h3>

    <form action="EJ3.php" method="post">
        <label for="ganados">Partidos Ganados</label><input name="PARTIDOS_GANADOS" type="text" value="">
        <label for="perdidos">Partidos Perdidos</label><input name="PARTIDOS_PERDIDOS" type="text" value="">
        <label for="empatados">Partidos Empatados</label><input name="PARTIDOS_EMPATADOS" type="text" value="">
        <input type="submit" name="Enviar" value="consultar">
    </form>
</body>
</html>