from flask import Blueprint

controladorAlumnoBP=Blueprint('controlador',__name__)

#ruta de inicio

@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"

#ruta para insert

@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    return'Se guardo el alumno'

#ruta para consultar todo

@controladorAlumnoBP.route('/consultatodo', methods=['GET'])
def consultatodo():
    return'Se consulto todo'

#ruta para actualizar

@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    return'Se actualizo el alumno'

#ruta para eliminar

@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar():
    return'Se elimino el alumno'
