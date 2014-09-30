<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hola Mundo</title>
    <link rel="stylesheet" type="text/css" href="hola.css"> <!-- Sintaxis para incluir documentos .css externos-->
    <script src="hola.js"></script> <!-- Sintaxis para incluir documentos .js externos-->
  </head>
    
  <body>
    <header> 
    </header>
        
    <div>
      <h1>HTML5 Skeleton</h1> 
      <input type="text" name="nombre" id="nombre" placeholder="Tu nombre..."/>
      <input type="button" value="Salúdame!" onclick="Saludar()"/>
      <!-- Con el atributo onclick el butón sabrá que función de js ejecutar cuando lo presionemos -->
    </div>
    
    <div id="minombre">
      <!-- Llamamos a la función Saludar() para que inserte nuestro nombre en el div-->
      <script> Saludar(); </script> 
    </div>
        
    <footer>
      <address>Code by Taller Desarrollo Web</address>
    </footer>
  </body>
</html>
