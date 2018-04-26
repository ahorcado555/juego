<?php

namespace spec;

use Triqui;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TriquiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Triqui::class);
    }
   // J1 marca poscion 5 
    function it_j1_marca_posicion_5()
    {
    $this->setJugada(1,5)->shouldReturn('Turno J2');
    }
    function it_j2_marca_posicion_3()
    {
    $this->setJugada(2,3)->shouldReturn('Turno J1');
    }

    function it_j1yj2_marca_posicion_5()
    {
    $this->setJugada(1,5);
    $this->setJugada(2,5)->shouldReturn('Posicion ya Jugada, marque otra posicion');
    }
}
