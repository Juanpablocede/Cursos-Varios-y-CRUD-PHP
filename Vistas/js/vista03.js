function cargar_provincias()
{
    var array = ["Cantabria", "Asturias", "Galicia", "Andalucia", "Extremadura"];
    var provincia = document.getElementById("provincia");
    for(var i=0;i<array.length;i++){ 
        provincia.options[i] = new option(array[i]);
     }
}