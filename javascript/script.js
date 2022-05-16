// AJAX 
function validate(field, query) {
    var xmlhttp;
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
            document.getElementById(field).innerHTML = "Validare..";
        } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(field).innerHTML = "Error.";
        }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
}

function checkForm() {
    // Preluarea valorilor din toate câmpurile de intrare și stocarea lor în variabile.
    var name = document.getElementById("username1").value;
    var password = document.getElementById("password1").value;
    var email = document.getElementById("email1").value;
 
    // Verificare câmpuri de intrare
    if (name == '' || password == '' || email == '') {
        document.getElementById("mesaj1").style.display = "none";
        document.getElementById("mesaj2").style.display = "flex";
    } else {
        // Câmpuri de eroare de notificare
        var username1 = document.getElementById("username");
        var password1 = document.getElementById("password");
        var email1 = document.getElementById("email");
        // Verificarea informatiilor
        if (username1.innerHTML == 'Mai mult de 4 caractere' || password1.innerHTML == 'Parolă prea scurtă' || email1.innerHTML == 'Invalid') {
            document.getElementById("mesaj1").style.display = "none";
            document.getElementById("mesaj2").style.display = "flex";
        } else {
            //Trimiteți formularul când toate valorile sunt valide.
            document.getElementById("myForm").submit();
            document.getElementById("mesaj2").style.display = "none";
            document.getElementById("mesaj1").style.display = "flex";
        }
    }
}
