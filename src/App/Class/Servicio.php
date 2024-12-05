<?php

namespace App\Class;
//use JsonSerializable;

class Servicio implements JsonSerializable
{
    private string $nombre;

    /**
     * @param string $nombre
     */
    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): Servicio{
        $this->nombre = $nombre;
        return $this;
    }

    public static function obtenerServicioFormateado(string $servicio):String{
        $servicioMinusculas = strtolower($servicio);
        $servicioFormateado = ucfirst($servicioMinusculas);
        return $servicioFormateado;
    }
}