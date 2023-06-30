
//Capturamos los valores ingresados por el usuario

const Nombre = document.getElementById("nombre");
const Apellido = document.getElementById("apellido");
const btn_resumen = document.getElementById("btn-resumen");
const Correo = document.getElementById("correo");
const ExpresionRegularCorreo = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,4})+$/;


form.addEventListener('submit', (e) => {
    e.preventDefault();
})

//Validaciones

function validate_name() {
    if (Nombre.value.length < 3) {
        document.getElementById("error_name").innerHTML = "El nombre ingresado es inválido"
    } else {
        document.getElementById("error_name").innerHTML = "El nombre ingresado es válido"
    }
}

btn_resumen.addEventListener("click", validate_name);

function validate_last_name() {
    if (Apellido.value.length < 2) {
        document.getElementById("error_last_name").innerHTML = "El apellido ingresado es inválido"
    } else {
        document.getElementById("error_last_name").innerHTML = "El apellido ingresado es válido"
    }
}
btn_resumen.addEventListener("click", validate_last_name);

function validate_email() {
    if (!ExpresionRegularCorreo.test(Correo.value)) {
        document.getElementById("error_email").innerHTML = "El correo ingresado es inválido"
    } else {
        document.getElementById("error_email").innerHTML = "El correo ingresado es válido"
    }
}

btn_resumen.addEventListener("click", validate_email);

// Inicializamos las variables

let valorGeneral = 200;
let cantidadEntradas = document.getElementById("cantidad_entradas");
let selectDescuento = document.getElementById("select_descuento");

// Funcion para calcular el valor de las entradas en función de la categoria elegida

function calcular() {
    switch (selectDescuento.value) {
        case "1":
            valorGeneral = 200 * 0,2 * cantidadEntradas.value;
            document.getElementById('total_a_pagar').innerHTML = valorGeneral;
            break;
        case "2":
            valorGeneral = 200 * 0,5 * cantidadEntradas.value;
            document.getElementById('total_a_pagar').innerHTML = valorGeneral;
            break;
        case "3":
            valorGeneral = 200 * 0,85 * cantidadEntradas.value;
            document.getElementById('total_a_pagar').innerHTML = valorGeneral;
            break;
        case "4":
            valorGeneral = 200 * cantidadEntradas.value;
            document.getElementById('total_a_pagar').innerHTML = valorGeneral;
            break;
        default:
            break;
    }

}

btn_resumen.addEventListener("click", calcular);

// Funcion para borrar validaciones y total

function borrar_total() {
    document.getElementById("error_name").innerHTML = ""
    document.getElementById("error_last_name").innerHTML = ""
    document.getElementById("error_email").innerHTML = ""
    document.getElementById('total_a_pagar').innerHTML = "";

}

bnt_borrar.addEventListener("click", borrar_total)
