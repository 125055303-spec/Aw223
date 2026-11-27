from flask import Blueprint, request, jsonify
from Models.modelEstudiante import *

controladorAlumnoBP = Blueprint('controlador', __name__)

# RUTA DE INICIO
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"


# INSERTAR ESTUDIANTE
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    try:
        insertEstudiante(nombreReq, carreraReq)
        return jsonify({"Completado": "Estudiante Guardado"}), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# CONSULTAR TODOS
@controladorAlumnoBP.route('/consultatodo', methods=['GET'])
def consultatodo():
    try:
        consulta = selectAll()
        return jsonify(consulta), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# CONSULTAR POR ID
@controladorAlumnoBP.route('/consultarPorId/<int:id>', methods=['GET'])
def consultarPorId(id):
    try:
        consulta = selectById(id)

        if consulta:
            return jsonify(consulta), 200
        else:
            return jsonify({"Mensaje": "Estudiante no encontrado"}), 404

    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# ACTUALIZAR ESTUDIANTE
@controladorAlumnoBP.route('/actualizarAlumno/<int:id>', methods=['PUT'])
def actualizar(id):
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    try:
        updateEstudiante(id, nombreReq, carreraReq)
        return jsonify({"Completado": "Estudiante Actualizado"}), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# ELIMINAR ESTUDIANTE
@controladorAlumnoBP.route('/eliminarAlumno/<int:id>', methods=['DELETE'])
def eliminar(id):
    try:
        softDeleteEstudiante(id)
        return jsonify({"Completado": "Estudiante Eliminado"}), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500