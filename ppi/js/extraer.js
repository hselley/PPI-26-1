// Método clásico
function extraccion1() {
    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Primer método de extracción: clásico
    for(i=0; i<g.length; i++) {
        if(g[i].checked) {
            genero = g[i].value;
            console.log(genero);
            cad = "<p>Su genero es " + genero + "</p>";
        }
    }

    if(genero!=null) {
        y.innerHTML = cad;
    } else {
        y.innerHTML = "<p>Seleccione una opción</p>";
    }
}

// Mejora del método clásico
function extraccion2() {
    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    x = document.querySelector("input[name=genero]:checked");
    if(x!=null) {
        genero = x.value;
        console.log(genero);
        cad = "<p>" + genero + "</p>";
    }

    if(genero!=null) {
        y.innerHTML = cad;
    } else {
        y.innerHTML = "<p>Seleccione una opción</p>";
    }
}

// Tercer método, uno más práctico
function extraccion3() {
    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Tercer método
    z = document.querySelectorAll('input[name=transporte]:checked');
    for(var v of z) {
      transporte = v.value;
      console.log(transporte);
      cad = cad + "<p>" + transporte + "</p>";
    }    

    if(genero!=null) {
        y.innerHTML = cad;
    } else {
        y.innerHTML = "<p>Seleccione una opción</p>";
    }
}