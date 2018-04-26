<?php

class Triqui
{
    private $jugadores = array('1' => 'J1', '2' => 'J2');
    private $jugadoresInv = array('1' => '2', '2' => '1');
    private  $posiciones =  array();

    public function setJugada($jugador, $posicion)
    {
        if ($this->setPosicion($posicion)){
            $jugadorSiguiente =  $this->siguienteJugador($jugador);
            return  'Turno '. $this->jugadores[$jugadorSiguiente];    
        }
        else
          return  'Posicion ya Jugada, marque otra posicion';
        
    }
    private function  siguienteJugador($jugador) 
    {
        return $this->jugadoresInv[$jugador];
    }
    private function setPosicion($posicion) {
        if(!in_array($posicion, $this->posiciones))
            return  array_push($this->posiciones, $posicion);
        else
            return false;
    }
}
