const parametros= new URLSearchParams(window.location.search);
const estado=parametros.get("estadophp")

if(estado===exito){
    alert("Éxito, Tu mensaje fue guardado");

}else if(estado===error){
    alert("Error, no se pudo guardar el mensaje");
}
if(estado!=null){
    window.history.replaceState({},document.title,window.location.pathname);
}