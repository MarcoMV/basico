function Saludar()
{
  var miNombre = document.getElementById("nombre").value;
    
  if(miNombre.length == 0)
  {
    alert("Escribe algo");
	}
    else
	{
		document.getElementById("divNombre").innerHTML = "<h3><code>Hola, " + miNombre + "</code></h3>";
	}
}
