<!DOCTYPE html>
<html>
    <head>
    <!--Aquí va la configuración de la página, es decir, la parte visual (CSS3) y dinámica (JavaScript)-->
        <title>Mi primera página</title> <!-- Etique que define el titulo del documento-->
        <style> <!-- Etiqueta para definir estilos CSS3 -->
            <!-- 
            Manipularemos objetos mediante clases, id o el nombre de la etiqueta misma:
            .class{
                atributos;
            }
            #id{
                atributos;
            }
            etiqueta{
                atributos;
            }
            -->
        </style>
    </head>
    
    <body>
    <!--Aquí va el contenido de la página, es decir, imágenes, video, forms, div, etc. que podremos manipular desde el head-->
        
        <header> <!-- Etiqueta semantica para cabecera-->
            <div>
                <img src="html5.jpg"/> <!--Etiqueta para insertar una imagen-->
            </div>
        </header>
        
        <!-- Los div son etiquetas para definir un bloque de contenido o una sección de página en nuestro documento html-->
        <div> 
            <!-- Primer bloque para el título, la caja de texto y el botón -->
            <h1>HTML5 Skeleton</h1> <!--Etiqueta para definir un título (es el más grande) le sigue h2, h3... h6 -->
        </div>
        <div>
            <!-- Segundo bloque para texto 'hola, mundo' y 'hola, tu nombre' -->
        </div>
        
        <footer>
            <!-- Etiqueta semantica para definir un pie de página-->
        </footer>
    </body>
</html>
