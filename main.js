function validarform() {
    var n = document.forms["form"]["name"].value;
    if (n == "") {
        alert("Debes ingresar tu nombre");
        return false;
    }
    var e = document.forms["form"]["email"].value;
    if (e == "") {
        alert("Debes ingresar tu correo");
        return false;
    }
    var es = document.forms["form"]["estado"].value;
    if (es == "") {
        alert("Debes ingresar tu estado");
        return false;
    }
}