// ==========================================
// CAMBIAR EL HTML DESDE JS
// ==========================================

const botonBienvenida = document.getElementById("botonBienvenida");
const bienvenida = document.getElementById("bienvenida");

botonBienvenida.addEventListener("click", function() {
    bienvenida.innerHTML = "¡Hola! Gracias por visitar mi portafolio :D";
});


// ==========================================
// CAMBIAR EL CSS DESDE JS
// ==========================================

const botonColor = document.getElementById("botonColor");
const botonFuente = document.getElementById("botonFuente");
const habilidades = document.querySelectorAll(".lista-habilidades li");


// Cambiar color de los cuadros
botonColor.addEventListener("click", function() {

    habilidades.forEach(function(habilidad) {
        habilidad.style.backgroundColor = "#ff8dc6";
        habilidad.style.borderColor = "#ff4fa3";
    });

});


// Cambiar tipografía de los cuadros
botonFuente.addEventListener("click", function() {

    habilidades.forEach(function(habilidad) {
        habilidad.style.fontFamily = "Georgia, serif";
    });

});


// ==========================================
// VALIDACIÓN DEL FORMULARIO
// ==========================================

const formulario = document.getElementById("formulario");
const nombre = document.getElementById("nombre");
const email = document.getElementById("email");

formulario.addEventListener("submit", function(event) {

    event.preventDefault();

    if (nombre.value === "") {
        alert("Por favor, escribe tu nombre.");
        return;
    }

    if (email.value === "") {
        alert("Por favor, escribe tu correo.");
        return;
    }

    alert("¡Datos enviados correctamente! Gracias por contactarme.");

    formulario.reset();
});