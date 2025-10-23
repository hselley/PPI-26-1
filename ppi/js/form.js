function user() {
    x = document.getElementById("fname").value;
    console.log(x);

    x += " ";
    x += document.getElementById("lname").value;

    x += " ";
    x += document.getElementById("passwd").value;

    if(document.getElementById("female").checked) {
        x += " female ";
    } else if (document.getElementById("male").checked) {
        x += " male ";
    } else if(document.getElementById("other").checked) {
        x += " other ";
    } else if(document.getElementById("unknown").checked) {
        x += " unknown "
    }

    document.getElementById("resultado").innerHTML = x;
}