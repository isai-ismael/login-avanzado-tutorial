var contador = true;
function vista() {
    var texto = document.getElementById("verPassword");
    if (contador == true) {
        texto.className = "fas fa-eye-slash verPassword";
        document.getElementById("input").type="text";
        contador=false;
    } else {
        texto.className = "fas fa-eye verPassword";
        document.getElementById("input").type="password";
        contador = true;
    }
}