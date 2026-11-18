import React, { useState } from 'react';
import './Destino.css';

function Destino({ destino, favorito, cambiarFavorito }) {

  const [mostrarDetalles, setMostrarDetalles] = useState(false);

  return (
    <div className="tarjeta">

      <img
        src={destino.imagen}
        alt={destino.nombre}
        className="imagen-destino"
      />

      <div className="contenido-tarjeta">

        <div className="encabezado-tarjeta">
          <h2>{destino.nombre}</h2>

          <button
            className={favorito ? 'boton-favorito activo' : 'boton-favorito'}
            onClick={cambiarFavorito}
          >
            {favorito ? '♥' : '♡'}
          </button>
        </div>

        <p className="ubicacion">
          {destino.ubicacion}
        </p>

        <p className="precio">
          Desde ${destino.precio} MXN
        </p>

        <button
          className="boton-detalles"
          onClick={() => setMostrarDetalles(!mostrarDetalles)}
        >
          {mostrarDetalles ? 'Ocultar detalles' : 'Ver detalles'}
        </button>

        {mostrarDetalles && (
          <div className="detalles">
            <p>{destino.descripcion}</p>
          </div>
        )}

      </div>
    </div>
  );
}

export default Destino;