import React, { useState } from 'react';
import Destino from './components/Destino';
import './App.css';

function App() {

  // Destinos turísticos
  const destinos = [
    {
      id: 1,
      nombre: 'Gran Canal',
      ubicacion: 'Venecia, Italia',
      precio: 35000,
      descripcion: 'Disfruta de un paseo en góndola por el Gran Canal, visitando sus puentes y palacios históricos.',    },
    {
      id: 2,
      nombre: 'Pueblo Lauterbrunnen ',
      ubicacion: 'Oberland bernés,Suiza',
      precio: 12000,
      descripcion: 'Conoce el encantador pueblo de Lauterbrunnen, rodeado de impresionantes acantilados y cascadas.',    },
  ];

  // Estados
  const [busqueda, setBusqueda] = useState('');
  const [favoritos, setFavoritos] = useState([]);

  // Agregar o quitar favoritos
  const cambiarFavorito = (id) => {

    if (favoritos.includes(id)) {
      setFavoritos(favoritos.filter((favorito) => favorito !== id));
    } else {
      setFavoritos([...favoritos, id]);
    }

  };

  // Filtrar destinos
  const destinosFiltrados = destinos.filter((destino) =>
    destino.nombre.toLowerCase().includes(busqueda.toLowerCase()) ||
    destino.ubicacion.toLowerCase().includes(busqueda.toLowerCase())
  );

  return (
    <div className="pagina">

      <header className="encabezado">
        <h1>Travel App</h1>
      </header>

      <main className="contenedor">

        <section className="bienvenida">
          <h2>Descubre tú próximo destino</h2>
          <p>Explora lugares increibles y planea tus proximas vacaciones.</p>
        </section>

        <section className="controles">

          <input
            type="text"
            placeholder="Buscar destino o ubicación..."
            value={busqueda}
            onChange={(e) => setBusqueda(e.target.value)}
          />

          <div className="contador">
            ♥ Mis favoritos: {favoritos.length}
          </div>

        </section>

        <section className="lista-destinos">

          {destinosFiltrados.length > 0 ? (

            destinosFiltrados.map((destino) => (

              <Destino
                key={destino.id}
                destino={destino}
                favorito={favoritos.includes(destino.id)}
                cambiarFavorito={() => cambiarFavorito(destino.id)}
              />

            ))

          ) : (

            <p className="sin-resultados">
              No se encontraron destinos.
            </p>

          )}

        </section>

      </main>

      <footer>
        <p>© 2026 Travel App | Explora, descubre y disfruta</p>
      </footer>

    </div>
  );
}

export default App;