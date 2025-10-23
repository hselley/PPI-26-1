var registro = "<tr><th>Nombre</th><th>Publisher</th><th>Plataforma</th><th>Medio</th><th>Fecha de adquisición</th></tr>";
var estilo = 0;

function juego() {
    /* Validación de los campos del formulario */
    if(document.getElementById("nombre").value == false) {
        alert("Nombre vacío. Debe llenar el campo.");
    } else if(document.getElementById("publisher").value == false) {
        alert("Publisher vacío. Debe llenar el campo.");
    } else if(document.getElementById("fecha").value == false) {
        // Validación de la fecha  
        alert("Fecha vacía. Debe llenar el campo.");
    } else {
        // Checkbox
        z = document.querySelectorAll('input[name=consola]:checked');
        cons = "<td>";
        for(var v of z) {
            cons += v.value + " ";
        }
        cons += "</td>"

        // input tipo Radio
        z = document.querySelector('input[name=medio]:checked');
        if(z!=null) {
            cons += "<td>" + z.value + "</td>";
        }

        // input fecha
        if(!document.getElementById('fecha').value == false) {
            fecha = "<td>" + document.getElementById('fecha').value + "</td>";
        }

        // Todos los campos han sido llenados
        if(estilo %2 == 0) {
            registro += "<tr class=\"renglon1\">";
        } else {
            registro += "<tr class=\"renglon2\">";
        }

        estilo++;

        // Agregar el nombre del juego
        registro += "<td>" + document.getElementById("nombre").value + "</td>";

        // Agregar publisher
        registro += "<td>" + document.getElementById("publisher").value + "</td>";
        
        // Plataforma y Medio
        registro += cons;

        // Fecha de lanzamiento
        registro += fecha;

        // Finalización del renglón
        registro += "</tr>";
        // Agregar todo a la tabla
        document.getElementById("consolas").innerHTML = registro;

        // Limpiar el formulario
        document.getElementById("formulario").reset();
    }
}