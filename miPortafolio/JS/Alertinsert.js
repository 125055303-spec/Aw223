
console.log("JavaScript conectado correctamente");

// Cambiar bienvenida
const botonBienvenida = document.getElementById("botonBienvenida");
const bienvenida = document.getElementById("bienvenida");

if (botonBienvenida && bienvenida) {
    botonBienvenida.addEventListener("click", function() {
        bienvenida.textContent = "¡Hola! Gracias por visitar mi portafolio :D";
    });
}

// Obtener parámetros de la URL
const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp");

// Mensajes del formulario
if (estado === "exito") {
    alert("¡Éxito! Tu mensaje fue guardado");
} else if (estado === "error") {
    alert("Error, no se pudo guardar el mensaje");
}

// Mensaje de actualización
if (parametros.get("actualizado") === "1") {
    alert("¡Registro actualizado correctamente!");
}

// Limpiar la URL si se mostró un mensaje
if (estado !== null || parametros.get("actualizado") === "1") {
    window.history.replaceState({}, document.title, window.location.pathname);
}
