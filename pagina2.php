<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "registro1") or
    die("Problemas con la conexion");

  mysqli_query($conexion, "insert into usuario(nombre,correo,contra) values 
                       ('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[contra]')")
    or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);
echo '<script>';
echo 'alert("Registro exitoso");';
echo 'window.location.href = "index.html";';  // Redirige a la página principal u otra página según tus necesidades.
echo '</script>';

mysqli_error($conexion);
echo '<script>';
echo 'alert("No fue posible ingresar");';
echo 'window.location.href = "Registrar.html";';  // Redirige a la página principal u otra página según tus necesidades.
echo '</script>';
  ?>
</body>

</html>