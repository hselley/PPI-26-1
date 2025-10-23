function proceso1() {
  x = document.getElementsByName("transporte");
  y = document.getElementById("resultado");
  var cad = "";
  var transporte;

  // Primer método: clásico
  for(i=0; i<x.length; i++) {
    if(x[i].checked) {
      transporte = x[i].value;
      console.log(transporte);
      cad = cad + "<p>" + transporte + "</p>";
    }
  }

  if(transporte!=null)
    y.innerHTML = cad;
  else 
    y.innerHTML = "<p>Seleccione una opción</p>";
}


function proceso2() {
  x = document.getElementsByName("transporte");
  y = document.getElementById("resultado");
  var cad = "";
  var transporte;

  // Segundo método: mejora del clásico
  for(i of x) {
    if(i.checked) {
      transporte = i.value;
      console.log(transporte);
      cad = cad + "<p>" + transporte + "</p>";
    }
  }
  
  if(transporte!=null)
    y.innerHTML = cad;
  else 
    y.innerHTML = "<p>Seleccione una opción</p>";
}

function proceso3() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Tercer método
    z = document.querySelectorAll('input[name=transporte]:checked');
    for(var v of z) {
        transporte = v.value;
        console.log(transporte);
        cad = cad + "<p>" + transporte + "</p>";
    }

    if(transporte!=null)
        y.innerHTML = cad;
    else 
        y.innerHTML = "<p>Seleccione una opción</p>";
}  
  