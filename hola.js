function Saludar()
{
  var miNombre = document.getElementById("nombre").value;  // Obtener el valor de la caja de texto
    
  if(miNombre.length == 0)
  {
    alert("Escribe algo");
	}
    else
	{
		//Imprimir nombre  
		document.getElementById("divNombre").innerHTML = "<h3><code>Hola, " + miNombre + "</code></h3>";
	}
}
