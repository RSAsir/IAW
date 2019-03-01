<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<title>SISTEMA DE DOS ECUACIONES</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
<center><h1><b><u>SISTEMA DE DOS ECUACIONES (FORMULARIO)</center></u></b></h1>
    <div id="marco">
	<div id="formulario" >
	<p><span style="font-size: 200%">
	Escribe los valores del sistema de dos ecuaciones con dos incógnitas y te resolveré el sistema</span></p>
    <p><span style="font-size: 200%">a<sub>1</sub>.x +
    b<sub>1</sub>.y = c<sub>1</sub></span></p>

    <p><span style="font-size: 200%">a<sub>2</sub>.x +
    b<sub>2</sub>.y = c<sub>2</sub></span></p>
<form method="POST" action="calcular.php">
  <table cellspacing="5" class="borde">
      <tbody>
        <tr>
          <td><strong>a<sub>1</sub>:</strong></td>
          <td><input type="text" name="a1" size="7" maxlength="7" /> </td>
          <td><strong>b<sub>1</sub>:</strong></td>
          <td><input type="text" name="b1" size="7" maxlength="7" /> </td>
          <td><strong>c<sub>1</sub>:</strong></td>
          <td><input type="text" name="c1" size="7" maxlength="7" /> </td>
        </tr>
        <tr>
          <td><strong>a<sub>2</sub>:</strong></td>
          <td><input type="text" name="a2" size="7" maxlength="7" /> </td>
          <td><strong>b<sub>2</sub>:</strong></td>
          <td><input type="text" name="b2" size="7" maxlength="7" /> </td>
          <td><strong>c<sub>2</sub>:</strong></td>
          <td><input type="text" name="c2" size="7" maxlength="7" /> </td>
        </tr>
      </tbody>
    </table>
	     <p align="right"><input type="submit" value="CALCULAR">
		 <input type="reset" value="BORRAR"></p>
		 
		 </form>
		 </div></div>
		 <div id="pie">
		 Ruben C. Sanchez Perez <br> Implantación de Aplicaciones Web (1ª Evaluación)
		 </div>
		 </body><html>
	

