
import Estudiante from "./components/Estudiante";
import "./App.css";

export default function App() {
  const estudiantes = [
    {id: 1, nombre: "Ashley", carrera: "Ingeniería"},
    {id: 2, nombre: "Michelle", carrera: "Medicina"},
    {id: 3, nombre: "Liliana", carrera: "Arquitectura"},
  ];
  return (
    <main className="contenedor">
      <h1>Lista de estudiantes</h1>
      <form>
        <input type="text" placeholder="Nombre del estudiante" />
        <input type="text" placeholder="Carrera del estudiante" />
        <button type="button">Agregar estudiante</button>
      </form>
      <h2>Estudiantes registrados</h2>
      <ul>
       {estudiantes.map((estudiante) => (
        <Estudiante
        key={estudiante.id}
        estudiante={estudiante}
        />
       ))
      }
      </ul>

      <p>Total de estudiantes: {estudiantes.length}</p>

    </main>


  );
}